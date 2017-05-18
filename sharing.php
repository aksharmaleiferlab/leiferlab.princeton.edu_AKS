<?php 
	$currfile = basename(__FILE__); 
	include('php/header.php');
?>
	<section id="content" class="container publications">

	<div class="textblock">
		<div class="hero-unit">	
			<p> Shared Code, Data and Reagents</p>
		</div>
		<p>
		<ul>
			<li><a href="#code">Code</a></li>
			<li><a href="#data">Data<a/></li>
			<li><a href="#worms">Worms</a></li>
			<li><a href="#plasmids">Plasmids</a></li>
		</ul>
	</p>
	
	</div>
	<hr />		
		
	<div class="meaty">			
		<h3><a name="code"></a>Code</h3>
		
		Acquisition and analysis code used in Leifer Lab publications is available at <a href="http://github.com/leiferlab/">http://github.com/leiferlab/</a>.
			<hr />		
		<h3><a name="#data"></a>Data</h3>
		<p>Processed data for all Leifer Lab senior-author publications are included as supplement in each respective journal article.</p> 
		
		<p>Those who seek raw imaging data may provide 1TB hard drives and pre-paid shipping and we will load the hard drives with the raw data and ship them back.</p> 
		<p>For <a href="http://www.pnas.org/content/early/2015/12/23/1507110112.abstract.html">Nguyen et al., PNAS 2015</a>, we are making all raw data publicly available through Amazon S3 using a  <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/RequesterPaysBuckets.html">Requester Pays</a> model.  All raw imaging data used in that paper (approximately half a terabyte) is available on the bucket  <a href="s3://leiferlabnguyen2015">s3://leiferlabnguyen2015</a> to any user with an <a href="http://aws.amazon.com">Amazon Web Services</a> account. The data is free to transfer to any Amazon EC2 instance. To download the data out of Amazon, the requester will be charged Amazon's data transfer rate of $0.09 USD per GB (as of this posting). See  <a href="https://aws.amazon.com/s3/pricing/">Amazon's page for up-to-date pricing</a>. Note in addition to an AWS account, you will also need a client that supports S3 Requester Pays buckets, such as the free <a href="https://cyberduck.io/">Cyberduck</a> client.</p> 

<p>For <a href="http://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1005517">Nguyen et al., Plos Comp Bio, 2017</a>, data is available at <a href="http://dx.doi.org/10.21227/H2901H">IEEE DataPorts, DOI: http://dx.doi.org/10.21227/H2901H</a></p>
			
			 	<hr />		
		<h3><a name="worms"></a>Worms</h3>
		<p>All worms used in Leifer Lab senior author publications are publicly available from the <a href="http://www.cgc.cbs.umn.edu/">Caenorhabditis Genetics Center (CGC) at University of Minnesota</a>. Search for "AML" to find a <ahref="http://www.cgc.cbs.umn.edu/search.php?st=AML&field=all&exst=&exfield=all">list of all available strains</a>. Worms can be requested from CGC for a small nominal fee ($7 per strain plus a $25 membership fee for academics, as of time of posting).</p>
			<hr />		
		<h3><a name="worms"></a>Plasmids</h3>
		<p>All published plasmids generated by the  Leifer Lab  have been made publicly available on <a href="https://www.addgene.org/Andrew_Leifer/">Addgene</a>.</p>
				<hr />		
			
	</div>


	</section>
	<?php 
		include('php/footer.php');
	?>
