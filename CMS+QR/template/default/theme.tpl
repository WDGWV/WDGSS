<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
 Template Design by TheWebhub.com
 http://www.thewebhub.com
 Released for free under a Creative Commons Attribution-Share Alike 3.0 Philippines
-->
<head>
<title>{wdg:title}</title>
{wdg:meta}
<link href="{wdg:load}style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!--
 PAID MODULE #1
 WDG:adblock
-->{wdg:adblock}
<!-- ?EOF? 
-->
<div id="header">
	<h1>{wdg:title}</h1>
</div>
<div id="menu">
	<ul>
		{wdg:hide1=begin}<li class="first"><a href="{wdg:url=1}">{wdg:link=1}</a></li>{wdg:hide1=end}
		{wdg:hide2=begin}<li><a href="{wdg:url=2}">{wdg:link=2}</a></li>{wdg:hide2=end}
		{wdg:hide3=begin}<li><a href="{wdg:url=3}">{wdg:link=3}</a></li>{wdg:hide3=end}
		{wdg:hide4=begin}<li><a href="{wdg:url=4}">{wdg:link=4}</a></li>{wdg:hide4=end}
		{wdg:hide5=begin}<li><a href="{wdg:url=5}">{wdg:link=5}</a></li>{wdg:hide5=end}
		{wdg:hide6=begin}<li><a href="{wdg:url=6}">{wdg:link=6}</a></li>{wdg:hide6=end}
		{wdg:hide7=begin}<li><a href="{wdg:url=7}">{wdg:link=7}</a></li>{wdg:hide7=end}
		{wdg:hide8=begin}<li><a href="{wdg:url=8}">{wdg:link=8}</a></li>{wdg:hide8=end}
		{wdg:hide9=begin}<li><a href="{wdg:url=9}">{wdg:link=9}</a></li>{wdg:hide9=end}
		{wdg:hide10=begin}<li><a href="{wdg:url=10}">{wdg:link=10}</a></li>{wdg:hide10=end}
	</ul>
</div>
<div id="page">
	<div id="page-top">
		<div id="page-bottom">
		<div>
			<div id="sidebar">
				{wdg:menu}
			</div>
			<div id="page_content">
				<div id="WHAY">
					{wdg:content}
                                        <hr>
                                        {wdg:share}
				</div>
			</div>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
</div>
<div id="footer">
	<p><span style="float: left; color: white;">{wdg:copyright=1}</span><span style="float: right; color: white;">{wdg:copyright=2}</span></p>
</div>
</body>
</html>
