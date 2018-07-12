let publications = {
	xmlURL: "../../assets/data/collection.xml",
	container: "#publications",
	datatablesContainer: "table.display",
	articles: null,
	moreInfo: "",

	init: function(){
		//Load xml file
		publications.loadXML();
	}, 

	loadXML: function(){
		$.get(this.xmlURL, {}, function (xml) {
			// check to make sure xml file exist, proceed to parse
			if(xml != null){
				// start building item
				publications.articles = "<table class='display' cellspacing='0' cellpadding='0' width='100%'>";
				publications.articles += " <thead>";
				publications.articles += "  <tr>";
				publications.articles += "      <th>Author</th>";
				publications.articles += "      <th>Year</th>";
				publications.articles += "      <th>Title</th>";
				publications.articles += "      <th>Journal</th>";
				publications.articles += "      <th class='is-hidden'>Keywords</th>"; //used for search
				publications.articles += "      <th class='is-hidden'>Authors</th>"; //used for search
				publications.articles += "      <th class='is-hidden'>Abstract</th>"; //used for search
				publications.articles += "  </tr>";
				publications.articles += " </thead>";
				publications.articles += " <tfoot>";
				publications.articles += "  <tr>";
				publications.articles += "      <th>Author</th>";
				publications.articles += "      <th>Year</th>";
				publications.articles += "      <th>Title</th>";
				publications.articles += "      <th>Journal</th>";
				publications.articles += "      <th class='is-hidden'>Keywords</th>"; //used for search
				publications.articles += "      <th class='is-hidden'>Authors</th>"; //used for search
				publications.articles += "      <th class='is-hidden'>Abstract</th>"; //used for search
				publications.articles += "  </tr>";
				publications.articles += " </tfoot>";
				publications.articles += " <tbody>";

				//Loop through each node and build item
				$('record', xml).each(function (i) {
					/************ XML Items ************/
					let noValue = "--";
					let theURL = "";
					
					// get contributors
					let authors = ($(this).find("author").text() != "") ? Array() : noValue;

					if(authors != noValue){
						$('author', $(this)).each(function (index) {
							authors.push($(this).text());
						});
						authors = authors.join(", ");
						//console.log("Authors: \n" + authors);
					}

					// get title
					let title = ($(this).find("title").text() != "") ? $(this).find("title").text() : noValue;
					let secondaryTitle = ($(this).find("secondary-title").text() != "") ? $(this).find("secondary-title").text() : noValue; 
					let fullTitle = ($(this).find("full-title").text() != "") ? $(this).find("full-title").text() : noValue;

					// get publication info
					let pages = ($(this).find("pages").text() != "") ? $(this).find("pages").text() : noValue;
					let volume = ($(this).find("volume").text() != "") ? $(this).find("volume").text() : noValue;
					let issue = ($(this).find("issue").text() != "") ? $(this).find("issue").text() : noValue;

					// get keywords
					let keywords = ($(this).find("keyword").text() != "") ? Array() : noValue;

					if(keywords != noValue){
						$('keyword', $(this)).each(function (index) {
							keywords.push($(this).text());
						});
						keywords = keywords.join(", ");
						//console.log("Keywords: \n" + keywords);
					}

					// get date
					let year = ($(this).find("year").text() != "") ? $(this).find("year").text() : noValue;

					// get isbn
					let isbn = ($(this).find("isbn").text() != "") ? $(this).find("isbn").text() : noValue;

					// get notes
					let notes = ($(this).find("notes").text() != "") ? $(this).find("notes").text() : noValue;

					// get electronic resource number
					let ern = ($(this).find("electronic-resource-num").text() != "") ? $(this).find("electronic-resource-num").text() : noValue;

					// get pdf urls
					let pdfURL = ($(this).find("pdf-urls").text() != "") ? Array() : noValue;
					
					// get label
					let label = ($(this).find("label").text() != "") ? $(this).find("label").text() : noValue;

					if(pdfURL != noValue){
						theURL = "";
						$('pdf-urls', $(this)).each(function (index) {
							theURL = "<a href='" + $(this).text() + "' target='_blank'>" + $(this).text() + "</a>";
							pdfURL.push(theURL);
						});
						pdfURL = pdfURL.join(", ");
						//console.log("PDF URLs: \n" + pdfURL);
					}

					let webURL = ($(this).find("web-urls").text() != "") ? Array() : noValue;

					if(webURL != noValue){
						theURL = "";
						$('web-urls', $(this)).each(function (index) {
							theURL = "<a href='" + $(this).text() + "' target='_blank'>" + $(this).text() + "</a>";
							webURL.push(theURL);
						});
						webURL = webURL.join(", ");
						//console.log("Web URLs: \n" + WebURL);
					}

					String.prototype.trunc = String.prototype.trunc ||
					      function(n){
					          return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
					      };

					let abstract = ($(this).find("abstract").text() != "") ? $(this).find("abstract").text() : noValue;
					
					/************ XML Items ************/

					// continue building table item
					publications.articles += "<tr data-fancybox data-src='#article_" + i + "' data-options='{\"touch\" : false}' class='articleRow'>";
					publications.articles += 	"<td>" + authors.trunc(100) + "</td>";
					publications.articles += 	"<td>" + year + "</td>";
					publications.articles += 	"<td>" + title + "</td>";
					publications.articles += 	"<td>" + fullTitle + "</td>";
					publications.articles += 	"<td class='is-hidden'>" + keywords + "</td>";
					publications.articles += 	"<td class='is-hidden'>" + authors + "</td>";
					publications.articles += 	"<td class='is-hidden'>" + abstract + "</td>";
					publications.articles += "</tr>";

					// build hidden container that can be used for displaying more info
					publications.moreInfo += "<div class='is-hidden three-quarters' id='article_" + i + "'>";
					publications.moreInfo += 	"<h3>" + title + "</h3>";
					publications.moreInfo += 	"<p><strong>Authors:</strong> " + authors + "</p>";
					//publications.moreInfo += 	"<p><strong>PDF:</strong><br />" + pdfURL + "</p>";
					publications.moreInfo += 	"<p><strong>Journal:</strong> <i>" + fullTitle + "</i></p>";
					publications.moreInfo += 	"<p><strong>Year:</strong> " + year + "</p>";
					publications.moreInfo += 	"<p><strong>Citation:</strong></p><p>" + notes + "</p>";
					//publications.moreInfo += 	"<p><strong>Volume:</strong> " + volume + "</p>";
					//publications.moreInfo += 	"<p><strong>Issue:</strong> " + issue + "</p>";
					//publications.moreInfo += 	"<p><strong>Pages:</strong> " + pages + "</p>";
					//publications.moreInfo += 	"<p><strong>ISBN:</strong> " + isbn + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>Abstract:</strong></p><p>" + abstract + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>Keywords:</strong></p><p>" + keywords + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>ECCO Products used:</strong> " + label + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>URL:</strong> " + webURL + "</p>";
					publications.moreInfo += "</div>";

				}); // end for each loop

				// finish building item
				publications.articles += " </tbody>";
				publications.articles += "</table>";

				// call to build publications function
				publications.buildPublications();
			} // end if
		}); // end get
	},

	buildPublications: function(){
		// insert articles to HTML container
		if(this.articles != null){
			$(this.container).html(this.articles + this.moreInfo);
			$(this.datatablesContainer).DataTable({
				paging: false,
				searching: true,
				info: false,
				language: {emptyTable: "<strong>There are currently no publications.</strong>"},
				"columnDefs": [{ "orderable": false, "targets": [2, 3] }],
				"order": [[ 1, "desc" ]]
			});
		};
	}

};

$(function() {
	publications.init();
});
