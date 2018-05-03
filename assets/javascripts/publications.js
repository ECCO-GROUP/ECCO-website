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
					// get contributors
					let authors = Array();

					$('author', $(this)).each(function (index) {
						authors.push($(this).text());
					});
					authors = authors.join(", ");
					//console.log("Authors: \n" + authors.join("\n"));

					// get title
					let title = $(this).find("title").text();
					let secondaryTitle = $(this).find("secondary-title").text();
					let fullTitle = $(this).find("full-title").text();

					// get publication info
					let pages = $(this).find("pages").text();
					let volume = $(this).find("volume").text();
					let issue = $(this).find("issue").text();

					// get keywords
					let keywords = Array();

					$('keyword', $(this)).each(function (index) {
						keywords.push($(this).text());
					});
					keywords = keywords.join(", ");
					//console.log("Keywords: \n" + keywords.join("\n"));

					// get date
					let year = $(this).find("year").text();

					// get isbn
					let isbn = $(this).find("isbn").text();

					// get electronic resource number
					let ern = $(this).find("electronic-resource-num").text();

					// get urls
					let pdfURL = Array();

					$('pdf-urls', $(this)).each(function (index) {
						pdfURL.push($(this).text());
					});
					//console.log("PDF URLs: \n" + pdfURL.join("\n"));

					let webURL = Array();

					$('web-urls', $(this)).each(function (index) {
						webURL.push($(this).text());
					});
					//console.log("Web URLs: \n" + webURL.join("\n"));

					String.prototype.trunc = String.prototype.trunc ||
					      function(n){
					          return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
					      };

					let abstract = $(this).find("abstract").text();
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
					publications.moreInfo += 	"<p><strong>Volume:</strong> " + volume + "</p>";
					publications.moreInfo += 	"<p><strong>Issue:</strong> " + issue + "</p>";
					publications.moreInfo += 	"<p><strong>Pages:</strong> " + pages + "</p>";
					publications.moreInfo += 	"<p><strong>ISBN:</strong> " + isbn + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>Abstract:</strong></p><p>" + abstract + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>Keywords:</strong><br />" + keywords + "</p>";
					publications.moreInfo += 	"<hr />";
					publications.moreInfo += 	"<p><strong>URL:</strong><br /><a href='" + webURL + "' target='_blank'>" + webURL + "</a></p>";
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
