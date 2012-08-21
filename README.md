<a href="http://www.ziligence.com"><img class="alignnone size-thumbnail wp-image-209" title="ziligence_logo_mid" src="http://ziligence.files.wordpress.com/2012/08/ziligence_logo_mid1.jpg?w=150" alt="" width="150" height="29" /></a>

<b>Ziligence is a free & open source site for financial research launched in August, 2012 by Joe Miller from his garage in San Francisco.</b>  

The site currently provides detailed earnings and valuation data for all U.S. public companies.  We run an algorithm on an open source platform to capture data from SEC filings and transform it into useable datasets.

<b>Our misssion is to democratize financial data and enable better decision making. This is how we are doing it:</b>

Software: Linux, Apache, mySQL, PHP
<br>Hardware: Amazon EC2 Servers

<b>About our algorithm:</b><br>
The algorithm completely processes a full set of financial statements in less than 15 seconds. Processing times range from as little as 3 seconds upto 15 seconds, depending on how much parsing is required. A filing for Bank of America may require 15 seconds to abstract and process. For every Bank of America filing, there are 50 smaller companies whose filings are processed in just 3 seonds. Over a 19 month period, our algorithm was developed and extensively tested. We delicately balanced speed with accuracy, as we assembled our process that effectively works across all U.S. public companies, for both Text and HTML filings.

In addition, the algorithm is contiguous, meaning we are simultaneously extracting values and generating all of the derived datasets. Thus, our current and trailing twelve month values in each dataset are updated simultaneously. All the meanwhile, values are validated through several multi-step processes, comparing it against records that are already in our database. In our "as filed" statements, we maintain the appropriate sequence, as new line items are introduced. By maintaining the appropriate order, we ensure our users are reading the statements as if they were overlaying eachother accross time.