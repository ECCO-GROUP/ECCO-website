#!/usr/bin/env python2
# -*- coding: utf-8 -*-
"""
Created on Thu Mar  7 13:36:35 2019

@author: ifenty
"""

#%%


import xmltodict
import sys
import copy
import codecs   
import six
import re

#%%
# ADDS A 'formatted-citation' FIELD TO THE collection.xml BIBLIOGRAPHY FILE 
# EXPORTED FROM MENDELEY 

# WHEN THE PUBLICATIONS PAGE IS RENDERED, THE WEBSITE JAVASCRIPT CODE 
# publications.js WILL LOOK FOR AND DISPLAY THE 'formatted-citation' field

# HOW TO USE:
# ROUTINE TAKES TWO ARGUMENTS: 
# 1) PATH TO FILENAME OF ORIGINAL XML FILE EXPORTED BY MENDELEY
# 2) PATH TO FILENAME OF NEW XML FILE WITH FORMATTED CITATION FIELD ADDED

# HOW TO INVOKE
# python parse_bibliography_xml_to_formatted_citation.py ../data/collection.xml ../data/collection.xml_with_formatted_citation

# AFTER YOU MAKE THE XML FILE WITH FORMATTED CITATIONS, 
# RENAME THE ORIGINAL collection.xml TO collection.xml.original
# AND COPY collection.xml_with_formatted_citation TO collection.xml

# THE WEBSITE JAVASCRIPT CODE, publications.js, NEEDS collection.xml
# IN THE /www/assets/data DIRECTORY



    
#%%  
    
def make_formatted_citations_from_xml(doc):
    records = doc['xml']['records']['record']
    
    citation_strings = dict()
    
    for r in range(len(records)):
        print r
        record = records[r]
        
        ref_type = record['ref-type']['@name']
        item_title = record['titles']['title']
        
        #print r, ref_type
        
        citation_string = ''
        
        if ref_type == 'Journal Article':
            

            authors = record['contributors']['authors']['author']
            #print type(authors)
            
            author_string = make_author_string(authors)
            
            citation_string = author_string + ','
            
            pub_year =  record['dates']['year']
            citation_string += ' ' + pub_year + ':'
            
            # if title ends with punctuation, don't include final period
            item_title  = record['titles']['title']
            if item_title[-1] == '?' or item_title[-1] == '.' or item_title[-1] == '!':
                citation_string += ' ' + item_title
            else:
                citation_string += ' ' + item_title  + '.'
            
            if 'secondary-title' in record['titles'].keys():
                journal_title = record['titles']['secondary-title']
                journal_title = shorten_journal_names(journal_title)
                citation_string += ' ' + journal_title
        
            if 'volume' in record.keys():
                vol = record['volume']
                citation_string += ', ' + vol
        
            if 'issue' in record.keys():
                issue = record['issue']
                citation_string += '(' + issue + ')'
                
            if 'pages' in record.keys():
                pages = record['pages']
                citation_string += ', ' + pages
            
            url_string = get_url(record)
            
            if len(url_string) > 0:
                citation_string += ', ' + url_string
                
        elif ref_type == 'Book Section':
            citation_string = ''
            authors = record['contributors']['authors']['author']
            
            author_string = make_author_string(authors)
            
            
            citation_string = author_string + ','
            
            pub_year =  record['dates']['year']
            citation_string += ' ' + pub_year + ':'
            
            item_title  = record['titles']['title']
            citation_string += ' ' + item_title  + '.'
            
            if 'secondary-title' in record['titles'].keys():
                journal_title = record['titles']['secondary-title']
                journal_title = shorten_journal_names(journal_title)
    
                citation_string += ' ' + journal_title
        
            if 'secondary-authors' in record['contributors']:
                secondary_authors = record['contributors']['secondary-authors']['author']
                secondary_author_string = make_author_string(secondary_authors, all_first=True)
                
                citation_string += ', ' + secondary_author_string + ', Eds.'
    
            if 'publisher' in record.keys():
                publisher = record['publisher']
                citation_string += ', ' + publisher
        
            if 'volume' in record.keys():
                vol = record['volume']
                citation_string += ', ' + vol
        
            if 'issue' in record.keys():
                issue = record['issue']
                citation_string += '(' + issue + ')'
                
            if 'pages' in record.keys():
                pages = record['pages']
                citation_string += ', ' + pages
            
            url_string = get_url(record)
            
            if len(url_string) > 0:
                citation_string += ', ' + url_string
                
        elif ref_type == 'Book' or ref_type == 'Report' or ref_type == 'Generic':
    
            check_secondary_authors = True
            
            if 'authors' in record['contributors'].keys():
                authors = record['contributors']['authors']['author']
                author_string = make_author_string(authors)
                citation_string = author_string + ','
                check_secondary_authors = True
            elif 'secondary-authors' in record['contributors']:
                secondary_authors = record['contributors']['secondary-authors']['author']
                secondary_author_string = make_author_string(secondary_authors, all_first=False)
                citation_string = secondary_author_string
                check_secondary_authors = False
                
            pub_year =  record['dates']['year']
            citation_string += ' ' + pub_year + ':'
    
            item_title  = record['titles']['title']
            citation_string += ' ' + item_title  + '.'
                
            
            if 'secondary-title' in record['titles'].keys():
                journal_title = record['titles']['secondary-title']
                journal_title = shorten_journal_names(journal_title)
                citation_string += ' ' + journal_title
        
            if check_secondary_authors:
                if 'secondary-authors' in record['contributors']:
                    secondary_authors = record['contributors']['secondary-authors']['author']
                    secondary_author_string = make_author_string(secondary_authors, all_first=True)
                    citation_string += ', ' + secondary_author_string + ', Eds.'
    
            if 'publisher' in record.keys():
                publisher = record['publisher']
                citation_string += ' ' + publisher
        
            if 'pub-location' in record.keys():
                pub_location = record['pub-location']
                citation_string += ', ' + pub_location
                
            if 'volume' in record.keys():
                vol = record['volume']
                citation_string += ', ' + vol
        
            if 'issue' in record.keys():
                issue = record['issue']
                citation_string += '(' + issue + ')'
                
            if 'pages' in record.keys():
                pages = record['pages']
                citation_string += ', ' + pages + ' pp.'
            
            url_string = get_url(record)
            
            if len(url_string) > 0:
                citation_string += ' ' + url_string + '.'
                
                
        elif ref_type == 'Thesis':
    
            authors = record['contributors']['authors']['author']
            
            author_string = make_author_string(authors)
    
            citation_string = author_string + ','
            
            pub_year =  record['dates']['year']
            citation_string += ' ' + pub_year + ':'
    
            item_title  = record['titles']['title']
            citation_string += ' ' + item_title  + '.'
                
            if 'secondary-title' in record['titles'].keys():
                journal_title = record['titles']['secondary-title']
                journal_title = shorten_journal_names(journal_title)
                citation_string += ' ' + journal_title
        
            if 'secondary-authors' in record['contributors']:
                secondary_authors = record['contributors']['secondary-authors']['author']
                secondary_author_string = make_author_string(secondary_authors, all_first=True)
                citation_string += ', ' + secondary_author_string + ', Eds.'
    
            if 'publisher' in record.keys():
                publisher = record['publisher']
                citation_string += ' ' + publisher
        
            if 'pub-location' in record.keys():
                pub_location = record['pub-location']
                citation_string += ', ' + pub_location
                
            if 'volume' in record.keys():
                vol = record['volume']
                citation_string += ', ' + vol
        
            if 'issue' in record.keys():
                issue = record['issue']
                citation_string += '(' + issue + ')'
                
            if 'pages' in record.keys():
                pages = record['pages']
                citation_string += ', ' + pages + ' pp.'
            
            url_string = get_url(record)
            
            if len(url_string) > 0:
                citation_string += ' ' + url_string + '.'
    
    
        ###################################
        elif ref_type == 'Conference Proceedings':
    
            authors = record['contributors']['authors']['author']
            
            author_string = make_author_string(authors)
    
            citation_string = author_string + ','
            
            pub_year =  record['dates']['year']
            citation_string += ' ' + pub_year + ':'
    
            item_title  = record['titles']['title']
            citation_string += ' ' + item_title  + '.'
                
            if 'secondary-title' in record['titles'].keys():
                journal_title = record['titles']['secondary-title']
                journal_title = shorten_journal_names(journal_title)
                citation_string += ' ' + journal_title
        
            if 'secondary-authors' in record['contributors']:
                secondary_authors = record['contributors']['secondary-authors']['author']
                secondary_author_string = make_author_string(secondary_authors, all_first=True)
                citation_string += ', ' + secondary_author_string + ', Eds.'
    
            if 'publisher' in record.keys():
                publisher = record['publisher']
                citation_string += ' ' + publisher
        
            if 'pub-location' in record.keys():
                pub_location = record['pub-location']
                citation_string += ', ' + pub_location
                
            if 'volume' in record.keys():
                vol = record['volume']
                citation_string += ', ' + vol
        
            if 'issue' in record.keys():
                issue = record['issue']
                citation_string += '(' + issue + ')'
                
            if 'pages' in record.keys():
                pages = record['pages']
                citation_string += ', ' + pages + ' pp.'
            
            url_string = get_url(record)
            
            if len(url_string) > 0:
                citation_string += ' ' + url_string + '.'
        
        ###################################
        elif ref_type == 'Magazine Article':
    
            authors = record['contributors']['authors']['author']
            
            author_string = make_author_string(authors)
    
            citation_string = author_string + ','
            
            pub_year =  record['dates']['year']
            citation_string += ' ' + pub_year + ':'
    
            item_title  = record['titles']['title']
            citation_string += ' ' + item_title  + '.'
                
            if 'secondary-title' in record['titles'].keys():
                journal_title = record['titles']['secondary-title']
                journal_title = shorten_journal_names(journal_title)
                citation_string += ' ' + journal_title
        
            if 'secondary-authors' in record['contributors']:
                secondary_authors = record['contributors']['secondary-authors']['author']
                secondary_author_string = make_author_string(secondary_authors, all_first=True)
                citation_string += ', ' + secondary_author_string + ', Eds.'
    
            if 'publisher' in record.keys():
                publisher = record['publisher']
                citation_string += ' ' + publisher
        
            if 'pub-location' in record.keys():
                pub_location = record['pub-location']
                citation_string += ', ' + pub_location
                
            if 'volume' in record.keys():
                vol = record['volume']
                citation_string += ', ' + vol
        
            if 'issue' in record.keys():
                issue = record['issue']
                citation_string += '(' + issue + ')'
                
            if 'pages' in record.keys():
                pages = record['pages']
                citation_string += ', ' + pages + ' pp.'
            
            url_string = get_url(record)
            
            if len(url_string) > 0:
                citation_string += ' ' + url_string + '.'
        
        
        else:
            print r,  ref_type
            citation_string = ''
    
        citation_strings[r] = citation_string
    
    
    
        #print r, citation_string, '\n'
        #print "\n------------------------"
        
        doc['xml']['records']['record'][r]['formatted-citation'] = \
            citation_string

    return doc


    
#%%
    
def get_url(record):
    url_string = str('')
    
    if 'electronic-resource-num' in record.keys():
        doi = record['electronic-resource-num']
        url_string += 'doi:' + doi

    elif 'web-urls' in record.keys():
        web_url = record['web-urls']['url']
        #print 'web_url ', web_url
        
        if '.com' in web_url:
            result = [x.strip() for x in web_url.split('.com/')]
            url = result[1]
        elif '.org' in web_url:
            result = [x.strip() for x in web_url.split('.org/')]      
            url = result[1]

        url_string += 'doi:' + url

    elif 'urls' in record.keys() :

        url = record['urls']
        if isinstance(url, dict):
            if 'web-urls' in url.keys():
                tmp = url['web-urls']['url']
                if isinstance(tmp, six.string_types):                
                    url_string += tmp
                else:
                    print 'GET_URL\N'
                    print tmp
                    print 'is not a string'
        
    #print type(url_string)
    return url_string


#%%    
def make_author_string(authors, all_first=False):
    author_string = ''

    if isinstance(authors, list):
        
        if len(authors) > 8:
            single_author_string = make_single_author_string(authors[0], all_first)    
            author_string = single_author_string + ' and Coauthors'
        else:
            for i in range(len(authors)):
                if i == 0:
                    # author 1 is last name, first name unless we explicitly 
                    # want all authors to be first initial, last name
                    single_author_string = make_single_author_string(authors[i], all_first)
                    author_string = single_author_string
                elif i > 0 and i < len(authors)-1:
                    # authors 2 .. n are first initial, last name
                    single_author_string = make_single_author_string(authors[i], True)
                    author_string += ', ' + single_author_string
                else: 
                    single_author_string = make_single_author_string(authors[i], True)
                    author_string += ', and ' + single_author_string
                        
    elif isinstance(authors,unicode):
        author_string = make_single_author_string(authors, all_first)

    else:
        print 'I do not know how to handle ', authors
        print type(authors)

    #print author_string
    return author_string    
#%%    
   
    

def make_single_author_string(author, all_first):
    author_string = ''
    result = [x.strip() for x in author.split(',')]

    if len(result) > 1:
        last_name = result[0]
        first_name = result[1]
        
        #print first_name, last_name
        fn_result = [x.strip() for x in first_name.split(' ')]
        #print fn_result

        abbreviated_first_name = ''
        
        for j in range(len(fn_result)):
            if j == 0:
                abbreviated_first_name += fn_result[j][0] + '.'
            else:
                abbreviated_first_name += ' ' + fn_result[j][0] + '.'
                
        if all_first == False:
            author_string = last_name + ', ' + abbreviated_first_name
        else:
            author_string +=  abbreviated_first_name  + ' ' + last_name

    else:
        author_string = result[0]
        
    return author_string
#%%    
    
def shorten_journal_names(full_name):
    if full_name == 'Geophysical Research Letters':
        return 'Geophys. Res. Lett.'
    elif full_name == "Bulletin of the American Meteorological Society":
        return 'Bull. Am. Meteorol. Soc.'
    elif full_name == 'Frontiers in Plant Science':
        return 'Front. Plant Sci.'
    elif full_name == 'Journal of Geophysical Research: Oceans':
        return 'J. Geophys. Res. Ocean.'
    elif full_name == 'Journal of Geophysical Research-Oceans':
        return 'J. Geophys. Res. Ocean.'
    elif full_name == 'Journal of Climate':
        return 'J. Clim.'
    elif full_name == 'Geophysical Research Letters':
        return 'Geophys. Res. Lett.'
    elif full_name == 'The Cryosphere':
        return 'Cryosph.'
    else:
        return full_name
    
#%%    
def replace_chars(match):
        char = match.group(0)
        return chars[char]


#%%    
if __name__== "__main__":
    
    input_fname = sys.argv[1]
    output_fname = sys.argv[2]

    #%%
    # remove annoying characters
    chars = {
        '\xc2\x82' : ',',        # High code comma
        '\xc2\x84' : ',,',       # High code double comma
        '\xc2\x85' : '...',      # Tripple dot
        '\xc2\x88' : '^',        # High carat
        '\xc2\x91' : '\x27',     # Forward single quote
        '\xc2\x92' : '\x27',     # Reverse single quote
        '\xc2\x93' : '\x22',     # Forward double quote
        '\xc2\x94' : '\x22',     # Reverse double quote
        '\xc2\x95' : ' ',
        '\xc2\x96' : '-',        # High hyphen
        '\xc2\x97' : '--',       # Double hyphen
        '\xc2\x99' : ' ',
        '\xc2\xa0' : ' ',
        '\xc2\xa6' : '|',        # Split vertical bar
        '\xc2\xab' : '<<',       # Double less than
        '\xc2\xbb' : '>>',       # Double greater than
        '\xc2\xbc' : '1/4',      # one quarter
        '\xc2\xbd' : '1/2',      # one half
        '\xc2\xbe' : '3/4',      # three quarters
        '\xca\xbf' : '\x27',     # c-single quote
        '\xcc\xa8' : '',         # modifier - under curve
        '\xcc\xb1' : '',          # modifier - under line
        '\xb8': '',
        '\x023': '',
        '\x0615': '',
    }

#    input_fname = '/Users/ifenty/git_repo_mine/ECCO-website-GITHUB/assets/data/collection.xml'
#    input_fname = '/Users/ifenty/tmp/ECCO-COLLECTION-20190312.xml'
#    output_fname = '/Users/ifenty/tmp/test.xml'

    f = codecs.open(input_fname, 'r',encoding='utf-8')
    line = f.read()
    
    lineB =  re.sub('(' + '|'.join(chars.keys()) + ')', replace_chars, line)
    doc = xmltodict.parse(lineB, encoding='utf-8')
   
    #%%
#    with open(input_fname) as fd:
#        doc = xmltodict.parse(fd.read(), encoding='utf-8')
        
    new_doc = make_formatted_citations_from_xml(copy.deepcopy(doc))
    
    for r in range(len(new_doc['xml']['records']['record'])):
        tmp = new_doc['xml']['records']['record'][r]['formatted-citation']
        #print tmp.encode('utf-8'), '\n'
    
    with open(output_fname, 'w') as f:
        f.write(xmltodict.unparse(new_doc).encode('utf-8')) 

    with open(output_fname + '-pretty', 'w') as f:
        f.write(xmltodict.unparse(new_doc, pretty=True).encode('utf-8')) 
      