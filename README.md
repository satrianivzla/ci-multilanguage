# ci-multilanguage
CodeIgniter multilanguage with flags using bootstrap and JQuery
This is just a little boilerplate that will help you about how to deal with Multi-languages sites using CodeIgniter
You only need to add to your project:
1.- files from assets folder
2.- files from aplication/controllers, aplication//views and update files from aplication/language
To show text you only need to use variable using this reference
<?php echo $this->session->userdata('lang');  ?>

Important:
There are a few extra flags added, if you need to use it, go to assets/css: 
1.- update file welcome.css, for example like this
.c_chinese {
	background-image:url('../images/flags/cn.png');
}
.c_germany {
	background-image:url('../images/flags/de.png');
}
.c_spanish {
	background-image:url('../images/flags/es.png');
}
.c_french {
	background-image:url('../images/flags/fr.png');
}
.c_italian {
	background-image:url('../images/flags/it.png');
}
.c_usa {
	background-image:url('../images/flags/us.png');
}
2.- If you need other flags just try to search it keeping the sie (16x11) and format (PNG) or change it to your convenience
