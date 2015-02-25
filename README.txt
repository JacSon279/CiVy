####################################################################################
#####									       #####
#####			 CivY   C.V. Management System		   	       #####
#####								 	       #####
####################################################################################
The entire CMS consists of 7 screens ( screen1, screen2, ... )
To customize CivY  just replace the files specified after the ==> mark.
The files must be opened in notepad for editing
==========================================================================
Note : the format for images must be same as the default images.
Eg 1.jpg cannot be used instead of 1.png

Content in new line will be displayed in new line and will not be wrapped

==============================    screen1  ====================================
==	                   Main Heading for Screen1 ==> civy/innertxt/index_innertxt/headline	==

	                   Menu options for Screen1 are stored in one file 'menu_options'
		and their corresponding links are stored in the second file 'menu_targets'
		in the same order.
		eg look at the table below.
		------------------------------------------------------------------
		|	Google	|	www.google.com	|
		------------------------------------------------------------------
		|	Yahoo	|	www.yahoo.com	|
		------------------------------------------------------------------
		|	Msn	|	www.msn.com	|
		------------------------------------------------------------------


==                   Detailed content for Screen1 ==> civy/innertxt/index_innertxt/index_detailed	==

==                   Facebook Page address for user==> civy/innertxt/index_innertxt/fbaddr		==

==                   Email ID for user==> civy/innertxt/index_innertxt/mailaddr			==

==                   Twitter ID for user==> civy/innertxt/index_innertxt/twaddr			==

==                   Phone number for user==> civy/innertxt/index_innertxt/phoneaddr		==


===========================         Screen 2            ===============================
==                   Title for screen2 ==> civy/innertxt/index_innertxt/screen2_title			==
==========================================================================
==                   Screen2 slide show images						==

	Place the slide show images in ==> slider-master/ directory
	any number of images are allowed
	Images must be of type jpg or jpeg or png only

==========================================================================

==========================================================================
==                   Title for screen3 ==> civy/innertxt/index_innertxt/screen3_title			==

==                   Screen3 works portfolio gallery					==
	Caption for work1 ==> civy/innertxt/index_innertxt/work1_title
	Detailed content in Popup Box for work1 ==> civy/innertxt/index_innertxt/work1_content

	Caption for work2 ==> civy/innertxt/index_innertxt/work2_title
	Detailed content in Popup Box for work2 ==> civy/innertxt/index_innertxt/work2_content

	Caption for work3 ==> civy/innertxt/index_innertxt/work3_title
	Detailed content in Popup Box for work3 ==> civy/innertxt/index_innertxt/work3_content

	Caption for work4 ==> civy/innertxt/index_innertxt/work4_title
	Detailed content in Popup Box for work4 ==> civy/innertxt/index_innertxt/work4_content

	The images for the works are stored in pics/index_content/screen2/

	Only 4 images are allowed
	The must be of .jpg format only
	
	The file names must strictly be as follows   :

	work_img_1.jpg
	work_img_2.jpg
	work_img_3.jpg
	work_img_4.jpg
==========================================================================

==============================  Screen4                    ============================
                   Title for screen4 ==> civy/innertxt/index_innertxt/screen4_title			

	Graduation College Name and address ==>   civy/innertxt/index_innertxt/grad_college
	Junior College Name and address ==>   civy/innertxt/index_innertxt/jr_college
	High School Name and address ==>   civy/innertxt/index_innertxt/high_school

	Name of Primary Valued Certificate ( 10th Standard ) ==>   civy/innertxt/index_innertxt/edu_title1
	File containing subjects list for Primary Valued Certificate ==>  civy/innertxt/index_innertxt/edu1_sub_list
	File containing marks list for Primary Valued Certificate ==>  civy/innertxt/index_innertxt/edu1_marks_list
	File containing aggregated percentage for Primary Valued Certificate ==>  civy/innertxt/index_innertxt/edu1_percentage

	Name of Secondary Valued Certificate ( 12th Standard ) ==>   civy/innertxt/index_innertxt/edu_title2
	File containing stream information (Science, Commerce or Arts) for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu2_stream
	File containing subjects list for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu2_sub_list
	File containing marks list for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu2_marks_list
	File containing aggregated percentage for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu2_percentage

	Name of Degree Valued Certificate ( Degree ) ==>   civy/innertxt/index_innertxt/edu_title3
	File containing stream information (Science, Commerce or Arts) for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu3_stream
	File containing subjects list for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu3_sub_list
	File containing marks list for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu3_marks_list
	File containing aggregated percentage for Secondary Valued Certificate ==>  civy/innertxt/index_innertxt/edu3_percentage


==============================  Screen 5 ============================
                   Title for screen5 ==> civy/innertxt/index_innertxt/screen5_title			

	Screen 5 allows to display custom html content
	If you know basic html then you can easily display any desired content using the screen5_main file
	The screen5_main file contains raw html tags
	Location of screen5_main file ==> civy/innertxt/index_innertxt/screen5_main
==============================  Screen 6   ============================
                   Title for screen6 ==> civy/innertxt/index_innertxt/screen6_title			

	Screen 6 allows to display custom html content
	If you know basic html then you can easily display any desired content using the screen6_main file
	The screen6_main file contains raw html tags
	Location of screen6_main file ==> civy/innertxt/index_innertxt/screen6_main

==================================================================================

		The messages sent by visitor are stored in civy/messages in separate text files for each message.
		 The site administrator can view these messages by accessing the ' messages ' directory.
====================================================================================
		The administrator can also upload a pdf version of the resume which can be downloaded by the visitors.
		The pdf file must be saved in the ' downloads ' directory.
		The pdf file must be named ' resume.pdf '.

====================================================================================
	The background image for screen1 remains same whenever refreshed.
	It can be changed from civy/pics/mainbg/
	The background image for screen1 can have any name but must be in jpg format
	
	The background images for other screens are selected randomly from the available backgrounds.
	The background images which can be randomly picked can be selected from civy/pics/bg directory.
	You can specify any number of images for using as background , the images must be in jpg format.
====================================================================================
	The profile photo can be changed from civy/pics/dp
	The color of border for profile picture is specified in civy/pics/dp/dp_border
