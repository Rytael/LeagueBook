<?PHP
		session_start();
		if (isset($_SESSION['sess_login']) && $_SESSION['sess_login'] == 1) {
			
		} else {
			header ('Location: ../index.php');
		}
?>
<!DOCTYPE html>
<html dir="ltr">
    <head>
        <title>Videos | LoLcodex</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
        <meta name="Keywords" content=",Videos">
        <meta name="Description" content="Private social network">
        <meta name="Generator" content="com 2.0">
        <meta name="Robots" content="index">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/style.css" id="groups_template_style">
        <link rel="stylesheet" type="text/css" href="../css/general.css">
        <link rel="index" title="LoLcodex" href="http://LoLcodex.com">
        <link rel="alternate" type="application/rss+xml" title="RSS" href="http://com/rss/LoLcodex/videos">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/#.css" rel="stylesheet" type="text/css">
        <link href="../css/# #2.css" rel="stylesheet" type="text/css">
        <link href="../css/# #3.css" rel="stylesheet" type="text/css">
        <link href="../css/groups.module.chat.css" rel="stylesheet" type="text/css">
        <link href="../css/groups.main.bar.css" rel="stylesheet" type="text/css">
        <link href="../css/groups_admin_panel.css" rel="stylesheet" type="text/css">
        <link href="../css/groups_comments.css" rel="stylesheet" type="text/css">
        <link href="../css/groups_modal_box.css" rel="stylesheet" type="text/css">
        <link href="../css/groups_newsfeed.css" rel="stylesheet" type="text/css">
        <link href="../css/groups_share.css" rel="stylesheet" type="text/css">
        <link href="../css/groups_top_bar.css" rel="stylesheet" type="text/css">
        <link href="../css/groups.notification.menu.css" rel="stylesheet" type="text/css">
        <link href="../css/prototabs.css" rel="stylesheet" type="text/css">
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/accordion.css" rel="stylesheet" type="text/css">
        <script type='text/javascript'>
            var _gaq = _gaq || [];

            _gaq.push(['_setAccount', 'UA-3121632-1']);
            _gaq.push(['_setDomainName', 'none']);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_setCustomVar', 1,'member_type', 'group_member', 3]);
            _gaq.push(['_setCustomVar', 2,'subdomain', 'LoLcodex.com', 3]);
            _gaq.push(['_setCustomVar', 3,'category', 'other', 3]);
            _gaq.push(['_setCustomVar', 4,'product_type', 'Free Pivot', 3]);
            _gaq.push(['_setCustomVar', 5,'custom_domain', 'false', 3]);
            _gaq.push(['_trackPageview']);

    

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>


        <!-- ehc -->
        <style type="text/css">
            .video {
                position: relative;
                float: left;
                width: 180px;
                height: 170px;
                text-align: center
            }
            .video_info {
                text-align: left;
                padding-left: 20px;
                padding-top: 3px
            }
            .lastvideo {
                position: relative;
                float: left;
                width: 160px;
                height: 120px;
                text-align: center
            }
            .lastvideo_info {
                text-align: left;
                padding-left: 10px;
                padding-top: 3px
            }

            .tmb {
                cursor: pointer;
                border: 1px solid #000000;
                width: 130px;
                height: 97px
            }
            .tmb:hover {
                border: 1px solid #FF0000
            }
            .tmb2 {
                cursor: pointer;
                border: 1px solid #000000;
                width: 100px;
                height: 75px
            }
            .tmb2:hover {
                border: 1px solid #FF0000
            }
            .video_link {
                font-weight: bold;
                cursor: pointer;
            }
            .video_title {
                font-size : 1.6em;
                font-weight: bold;
            }
            .video_userIcon {
                vertical-align: middle;
                padding-right: 2px
            }
            .video_text {
                font-weight: normal;
            }
            .video_textBold {
                font-weight: bold;
            }

            div.flash {
                width: 430px;
                border-color: #eee;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
            }
            .progressWrapper {
                width: 381px;
                overflow: hidden;
            }

            .progressContainer {
                margin-top: 5px;
                margin-bottom: 0!important;
                padding: 4px;
                border: solid 1px #E8E8E8;
                background-color: #F7F7F7;
                overflow: hidden;
            }
            /* Message */
            .message {
                margin: 1em 0;
                padding: 10px 20px;
                border: solid 1px #FFDD99;
                background-color: #FFFFCC;
                overflow: hidden;
            }
            /* Error */
            .red {
                border: solid 1px #B50000;
                background-color: #FFEBEB;
            }

            /* Current */
            .green {
                border: solid 1px #DDF0DD;
                background-color: #EBFFEB;
            }

            /* Complete */
            .blue {
                border: solid 1px #CEE2F2;
                background-color: #F0F5FF;
            }

            .progressName {
                font-size: 8pt;
                font-weight: 700;
                color: #555;
                width: 323px;
                height: 14px;
                text-align: left;
                white-space: nowrap;
                overflow: hidden;
            }

            .progressBarInProgress,
            .progressBarComplete,
            .progressBarError {
                font-size: 0;
                width: 0%;
                height: 2px;
                background-color: blue;
                margin-top: 2px;
            }

            .progressBarComplete {
                width: 100%;
                background-color: green;
                visibility: hidden;
            }

            .progressBarError {
                width: 100%;
                background-color: red;
                visibility: hidden;
            }

            .progressBarStatus {
                margin-top: 2px;
                width: 337px;
                font-size: 7pt;
                font-family: Arial;
                text-align: left;
                white-space: nowrap;
            }

            a.progressCancel {
                font-size: 0;
                display: block;
                height: 16px;
                width: 16px;
                background-image: url(/images/fugue/cross-small.png);
                background-repeat: no-repeat;
                float: right;
            }

            /* -- SWFUpload Object Styles ------------------------------- */
            .swfupload {
                vertical-align: top;
            }
        </style>
        <script type="text/javascript" src="/includes/swfupload/js/swfupload.js?"></script>
        <script type="text/javascript" src="/includes/swfupload/js/swfupload.queue.js?"></script>
        <script type="text/javascript" src="/includes/swfupload/js/fileprogress.js?"></script>
        <script type="text/javascript" src="/includes/swfupload/js/handlers.js?"></script>
        <!-- /ehc -->

        <link href="/public/css/groups/groups.notification.menus.css?15997" rel="stylesheet" type="text/css">
        <script type="text/javascript" charset="utf-8">
            var isTheBook = true;
            var blogsAllowed = true;
            var askAllowed = false;
        </script>
    </head>
    <body class="group_member">




        <div id="bg_differentiation" style="display: none"></div>
        <div id="ajax_popup" style="display: none">
            <div class="ajaxModalBox"> <a href="javascript:groups.modalBox.hide()" class="closeButton"></a>
                <div id="ajax_popup_content"></div>
            </div>
        </div>
        <div id="busy_popup"></div>
        <div id="loader"><blink>Loading...</blink></div>
        <div id="groupsNotifierCont">
            <div id="groupsNotifier" class="msg_info"></div>
        </div>
        <div id="groupsInfoBoxCont" style="visibility:hidden;"><img src="/images/InfoBoxArrow2up.png" class="arrow" />
            <div id="groupsInfoBox"> </div>
        </div>
        <!-- skfnsdfknsdlkfn LoLcodex -->



        <script>
            function searchGroups()
            {

                var searchText = document.search.searchText.value;

                searchText = searchText.replace(/%/g, "%25");

                if(searchText) {

                    window.location = "http://com/home/search/" + searchText;
                }
            }

            function keys(e)
            {

                if(e.keyCode) {
                    var k = e.keyCode;
                } else {
                    var k = e.which;
                }
                return k;
            }
            function isEnters(e)
            {
                var k = keys(e);

                if(k == 13) {
                    searchGroups();
                    // return true;
                } else {
                    return false;
                }

            }
        </script>
        <div id="layout" class="module_videos ">
            <div id="header">
                <div id="hgroups">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="td_group_title" valign="bottom"><div id="h1">
                                    <a id="groupTitle" href="http://LoLcodex.com/">
                                        <h1>LoLcodex</h1>
                                    </a>
                                </div>
                            </td>
                            <td class="td_notifications" valign="bottom">
                                <ul id="headerNotificationsIcons">
                                    <li>
                                        <a id="headerFriendRequestItem" onclick="return false" href="#"> </a>
                                        <ul class="notificationMenu" style="display: none">
                                            <h3> Friend Requests </h3>
                                            <div class="notificationContent"> </div>
                                            <li class="bottom">
                                                <a href="http://LoLcodex.com/alerts">See All Friend Requests</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a id="headerMessagesItem" onclick="return false" rel="setAllMessagesPassive" href="#"> </a>
                                        <ul class="notificationMenu" style="display: none">
                                            <h3>Messages
                                                <div class="notificationAction">
                                                    <a href="http://lolcodex/homepage/composemessage.php">Compose New Message</a>
                                                </div>
                                            </h3>
                                            <div class="notificationContent">
                                                <li class="notificationNoContent">No Messages</li>
                                            </div>
                                            <li class="bottom">
                                                <a href="http://LoLcodex.com/incomingmessages.php">See All Messages</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a id="headerNotificationsItem" onclick="return false" rel="setAllNotificationsPassive" href="#"> </a>
                                        <ul class="notificationMenu" style="display: none">
                                            <h3> Notifications </h3>
                                            <div class="notificationContent"> </div>
                                            <li class="bottom">
                                                <a href="http://LoLcodex.com/notifications">See All Notifications</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td class="td_search" valign="bottom">
                                <div id="searchBoxDiv">
                                    <form id="book_search_form" method="POST" action="http://LoLcodex.com/people/search">
                                        <input id="book_groups_search_text" type="search" name="q" placeholder="Search" autocomplete="off" data-placeholder-bound="true">
                                        <input id="searchSubmitInput" type="submit" data-placeholder-bound="true">
                                        <ul id="book_search_types_box" class="autocomplete" style="display: none">
                                            <li id="searchPeopleModule" class="searchModule" onClick="groups.search.goToAdvancedSearch()">
                                                <div class="searchModuleTitle">People</div>
                                                <div class="searchModuleSubtitle">Advanced Search</div>
                                            </li>
                                            <li id="searchPeopleModuleLoading" class="searchResultsLoading" style="display: none"></li>
                                            <li id="searchMessagesModule" class="searchModule" onClick="groups.search.searchInModule('messages')">
                                                <div class="searchModuleTitle">Messages</div>
                                                <div class="searchModuleSubtitle">More?</div>
                                            </li>
                                            <li id="searchBlogsModule" class="searchModule" onClick="groups.search.searchInModule('blogs')">
                                                <div class="searchModuleTitle">Blogs</div>
                                                <div class="searchModuleSubtitle">More?</div>
                                            </li>
                                            <li id="searchBlogsModuleLoading" class="searchResultsLoading" style="display: none"></li>
                                            <li class="noResultsFound centered hovered" style="display: none" class="hovered">
                                                No results found for <span class="searchKeyword"></span>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </td>
                            <td class="td_user_nav" valign="bottom" align="right"><ul id="basicMenu">
                                    <li id="basicItemHome"><a href="http://LoLcodex.com/">Home</a></li>
                                    <li id="basicItemProfile"><a href="http://LoLcodex.com/people/person/oajiivhbldxbldhwi">Profile</a></li>
                                    <li id="basicItemAccount"><a href="#">Account <span class="downArrowIcon">&#9660;</span></a>
                                        <ul id="accountMenu">
                                            <div class="userAvatar"><a href="http://LoLcodex.com/people/person/oajiivhbldxbldhwi"><img src="no_image.png" alt=<?PHP if($_GET['summ'] == NULL) print "Please associate a Summoner name"; else print $_GET['summ']; ?> width="50" height="50" align="absmiddle"></a><p><a href="http://LoLcodex.com/people/person/oajiivhbldxbldhwi"><?PHP if($_GET['summ'] == NULL) print "Please associate a Summoner name"; else print $_GET['summ']; ?></a></p></div>
                                            <li><a href="http://LoLcodex.com/myprofile/myprofile.php/myprofile.php">Edit Profile</a></li>
                                            <!--<li><a href="http://LoLcodex.com/preferences">Account Settings</a></li>-->
                                            <li><a href="http://LoLcodex.com/privacy_settings/privacysettings.php">Privacy Settings</a></li>
                                            <!--<li><a href="http://lolcodex/homepage/composemessage.php">Compose New Message</a></li>
                                            <li><a href="http://lolcodex/homepage/change_password.php">Change Credentials</a></li>
                                            <li><a href="http://lolcodex/homepage/emailsettings.php">E-mail Settings</a></li>-->
                                            <li><a href="http://LoLcodex.com/invite/invite.php">Invite People</a></li>
                                            <li><a href="../scripts/logout.php">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="contentWrapper" class="">
                <div id="aSide">
                    <div id="userProfileBlock">
                        <a href="http://LoLcodex.com/people/person/oajiivhbldxbldhwi"><img
                                src="no_image.png"
                                alt=<?PHP if($_GET['summ'] == NULL) print "Please associate a Summoner name"; else print $_GET['summ']; ?>
                                width="50" height="50"></a>
                        <h1><a href="http://LoLcodex.com/people/person/oajiivhbldxbldhwi"><?PHP if($_GET['summ'] == NULL) print "Please associate a Summoner name"; else print $_GET['summ']; ?></a></h1>
                        <p><a href="http://LoLcodex.com/people/person/oajiivhbldxbldhwi/edit">Edit Profile</a></p>
                    </div>              
                    <div id="menu">
                        <ul id="nav" class="level1">
                            <li id="menu_item_17306106" class="selected" >
                                <a href=<?PHP echo "../userhomepage/userhomepage.php?summ=" .$_SESSION['summoner']; ?>><span>Home</span></a>
                            </li>
                            <li id="menu_item_17306107" >
                                <a href=<?PHP echo "../myprofile/myprofile.php?summ=" .$_SESSION['summoner']; ?> z=""><span>My Profile</span></a>
                            </li>
                            <li id="menu_item_17306108" >
                                <a href=<?PHP echo "../friends/friends.php?summ=" .$_SESSION['summoner']; ?>><span>Friends</span></a>
                            </li>
                            <li id="menu_item_17306109" >
                                <a href=<?PHP echo "../invite/invite.php?summ=" .$_SESSION['summoner']; ?> z=""><span>Invite</span></a>
                            </li>
                            <li id="menu_item_17306110" >
                                <a href=<?PHP echo "../teams/teams.php?summ=" .$_SESSION['summoner']; ?>><span>Teams</span></a>
                            </li>
                            <li id="menu_item_17306111" >
                                <a href=<?PHP echo "../screenshots/screenshots.php?summ=" .$_SESSION['summoner']; ?>><span>Screenshots</span></a>
                            </li>
                            <li id="menu_item_17306112" >
                                <a href=<?PHP echo "../videos/videos.php?summ=" .$_SESSION['summoner']; ?>><span>Videos</span></a>
                            </li>
                            <li id ="menu_item_17306113" >
                                <a href=<?PHP echo "../scrims/scrims.php?summ=" .$_SESSION['summoner']; ?>><span>Scrims</span></a>
                            </li>
                            <li id="menu_item_17306114" >
                                <a href=<?PHP echo "../blogs/blogs.php?summ=" .$_SESSION['summoner']; ?>><span>Blogs</span></a>
                            </li>
                        </ul>
                        <div style="clear:both;"></div>
                    </div>                
					<ul id="subGroupsBlock">
                        <h3><a href="../teams/teams.php?summ=">Teams</a></h3>
                        <li>
							<a href=" ../teams/SampleTeam/SampleTeamA.php">Sample Teams</a>
						</li>
					</ul>     
                </div>            
                <div id="content"><div id="col_main" class="col_main">
                        <div id="top_block_no_1"  ><div class="box"><div class="box_top" id="block_title_no_1"><h2>Videos</h2></div><div style="clear:both"></div><div class="box_mid"><div class="content" id="block_no_1">
                                        <div class="modules_horizontal_menu_cont" style="padding-top:0"><ul class="modules_horizontal_menu"></ul></div>

                                        <style>
                                            #status_form { overflow: hidden; }
                                            #newsfeed_filters { display: none; }
                                        </style>
                                        <div id="newsfeed">
                                            <div id="oopsOverlay"></div>
                                            <div id="emptyContent">
                                                <div class="emptyModuleIcon" style="background-position: -1792px 0;;"></div>
                                                <div class="emptyModuleText">

                                                    <h3>You've reached the video <br> section but none have been posted yet!</h3><p>Why not contribute to this section by uploading a video? You can also share a video from YouTube, Metacafe, or Dailymotion.</p><ul id="emptyActions"><li><a class="emptyAddIcon" href="javascript:void(uploadVideo());">Upload a Video</a></li><li><a class="emptyAddIcon" href="javascript:void(shareVideo());">Share a video from YouTube, Metacafe and  Dailymotion</a></li></ul></div>
                                            </div>
                                        </div>

                                    </div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                    </div>
                    <div class="col_side" id="col_sidebar">
                        <div id="top_block_no_2"  >	<div class="box_mid_ops_button_cont"><button class="box_mid_ops_button add_content" onClick="javascript:uploadVideo();"><div class="content_plus"></div><div class="app_icon app_videos"></div>Upload Video</button></div>
                        </div>
                        <div id="top_block_no_1421807"  class="movable" ><div class="box"><div class="box_top" id="block_title_no_3"><h2>Top Contributors</h2></div><div style="clear:both"></div><div class="box_mid box_mid_sidebar_ie_width_fix"><div class="content" id="block_no_1421807">No data yet...</div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                        <div id="top_block_no_1421808"  class="movable" >
                            <div class="box">
                                <div class="box_top" id="block_title_no_3">
                                    <h2>Share</h2>
                                </div>
                                <div style="clear:both"></div>
                                <div class="box_mid box_mid_sidebar_ie_width_fix">
                                    <div class="content" id="block_no_1421808">
                                        <script type="text/javascript" 
                                        src="/gw.php?group_name=LoLcodex&width=165px&fontfam=arial, helvetica, sans-serif&
                                        fontsize=11&bkgcolor=f1f1f1&text_color=666&border_color=a4a4a4&gw_m_people=1&gw_m_people_amount=8&
                                        gw_m_blogs=0&gw_m_blogs_amount=3&gw_m_talks=0&gw_m_talks_amount=3&gw_m_photos=0&gw_m_photos_amount=3&
                                        gw_m_links=0&gw_m_links_amount=3&gw_m_wiki=0&gw_m_wiki_amount=3&gw_m_calendar=0&gw_m_calendar_amount=0&
                                        gw_m_groups=0&gw_m_groups_amount=3&gw_m_videos=1&gw_m_videos_amount=0&gw_m_files=0&gw_m_files_amount=0&gw_m_latest=0&
                                        gw_m_latest_amount=3&love_groups=0"></script>
                                    </div>
                                </div>
                            </div>
                            <div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div>
                        </div>
                        <div id="hidden_block_6"  style="display:none"  ><div class="box"><div style="clear:both"></div><div class="box_mid box_mid_sidebar_ie_width_fix"><div class="content" id="block_no_6"></div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                    </div>
                </div>
            </div>

            <div id="footer"> &copy; 2013 LoLcodex
            </div>




            <div id="groups_bar">
                <span id="groups_search_button" class="button">
                    <form id="search_form" action="http://LoLcodex.com/people/search" method="POST" autocomplete="off">
                        <input type="search" id="groups_search_text" name="q" placeholder="Search in group">
                    </form>
                </span>

                <a id="groups_notifications_button" title="Notifications" class="button" href="javascript:;">Notifications<div id="groups_notification_count" class="count" style="display:none;"><img class="groups_bar_overlay" src="/images/groups_bar/overlay.png" />0</div></a>
                <div id="groups_notifications_panel" class="panel">
                    <h6>Notifications</h6>
                    <ul>
                        <a href="http://LoLcodex.com/alerts">There are no new Notifications</a>
                    </ul>
                </div>
                <a id="groups_chat_button_g_LoLcodex" class="chat group button" title="Chat" href="/_trigger/chat/toggle/group/LoLcodex"><span id="groups_chat_button_g_label">Chat</span></a>
            </div>

            <div id="groups_toaster_vcard" class="special_bg special_text special_border"></div>



            <iframe style="display:none;" name="_rlcdn" width=0 height=0 frameborder=0 src="http://ei.rlcdn.com/362258.gif?x=50b6c8d56ee2089ab2920555bfb0468ad7a137f72601a5d9&c=bf-ecb"></iframe>

            <!-- footer scripts begin -->


            <!-- tpl:cm -->
            <script type="text/javascript">
                window.groups = {_info:{module:{}},langStrings:{}};

        
                if(window._kmq) {
                    _kmq.push(['identify', 'username_oajiivhbldxbldhwi']);
                }
            </script>
            <!-- tpl:gp -->

            <!--script src="/public/js/src/lib/LAB/LAB.js?b=1359739035"></script-->

            <script type="text/javascript">
                /*subgroup*/
    
                /*gadmin*/
    
                /*album*/
    
                groups._info.domName = 'http://LoLcodex.com';
                groups._info.groupName = 'LoLcodex';
                groups._info.groupNameX = '';
                groups._info.isMember = '1';
                groups._info.isGroupAdmin = '';
                groups._info.subscriptionName = '';
                groups._info.shouldEmailSubscriptionNotification = '';
                groups._info.obj1 = '';
                groups._info.userId = '13530230';
                groups._info.userName = 'oajiivhbldxbldhwi';
                groups._info.isMobile = '';
                groups._info.module.name = 'videos';
                groups._info.module.profileOwnerId = '';
                groups._info.wikiPageCategoryId = '';
                groups._info.wikiCategoryId = '';
                groups._info.previewImage = '';

    
                groups._info.module.designMode = !!window.hasPermission;

                /*--------------*/

                /*javascript_variables*/
    
                groups._info.groupId = 704597;
                groups._info.title = 'LoLcodex';
                groups._info.moduleTitle = 'Videos';
                groups._info.searchTypes = {'blogs':{title:'Blogs',actionURL:'http://LoLcodex.com/blogs/search'},'chat':{title:'Chat',actionURL:'http://LoLcodex.com/chat/search'},'people':{title:'Members',actionURL:'http://LoLcodex.com/people/search'},'talks':{title:'Forum',actionURL:'http://LoLcodex.com/talks/search'},'wiki':{title:'Wiki',actionURL:'http://LoLcodex.com/wiki/search'},'files':{title:'Files',actionURL:'http://LoLcodex.com/files/search'},'messages':{title:'Priv. Messages',actionURL:'http://LoLcodex.com/search_messages'}};
                groups._info.language = 'english';
                groups._info.languageRevision={custom:135260045,main:424,name:'english'};
                groups._info.bannedWords = '';
                groups._info.titleSeperator = ' | ';
                groups._info.userNameSurname = '<?PHP if($_GET['summ'] == NULL) print "Please associate a Summoner name"; else print $_GET['summ']; ?>';
                groups._info.userAvatar = 'http://LoLcodex.com/avatars/b/80.png';
                groups._info.chatConfig = {"jid":"13530230-704597@im.com","room":"704597@conference.im.com","token":"7e4422157878949a9db1641dec01d6af","bind_endpoint":"http:\/\/LoLcodex.com\/http-bind","mode":"xmpp"};groups._info.membershipId = '31280300';
                groups._info.isAdmin = '';
                groups._info.defaultAvatar = 'http://com/avatars/b/208.png?0';
                groups._info.defaultAvatarMini = 'http://com/avatars/b/16.png?0';
        

                /*javascript_language_strings*/
    
                groups.langStrings['See %s new update(s)'] = 'See %s new update(s)';
                groups.langStrings['Delete'] = 'Delete';
                groups.langStrings['Like'] = 'Like';
                groups.langStrings['Unlike'] = 'Unlike';
                groups.langStrings['Are you sure you want to delete this comment?'] = 'Are you sure you want to delete this comment?';
                groups.langStrings['Are you sure you want to delete this entry and all related data with it?'] = 'Are you sure you want to delete this entry and all related data with it?';
                groups.langStrings['Liked by %s.'] = 'Liked by %s.';
                groups.langStrings['Reply'] = 'Reply';
                groups.langStrings['Write a reply'] = 'Write a reply';
                groups.langStrings['Name surname'] = 'Name surname';
                groups.langStrings['Email'] = 'Email';
                groups.langStrings['Comment'] = 'Comment';
                groups.langStrings['Please enter values for the following fields: %s'] = 'Please enter values for the following fields: %s';
                groups.langStrings['persons'] = 'persons';
                groups.langStrings['person'] = 'person';
                groups.langStrings['liked'] = 'liked';
                groups.langStrings['comments'] = 'comments';
                groups.langStrings['comment'] = 'comment';
                groups.langStrings['ago'] = 'ago';
                groups.langStrings['just now'] = 'just now';
                groups.langStrings['seconds'] = 'seconds';
                groups.langStrings['1 minute from now'] = '1 minute from now';
                groups.langStrings['1 minute ago'] = '1 minute ago';
                groups.langStrings['minutes'] = 'minutes';
                groups.langStrings['hours'] = 'hours';
                groups.langStrings['1 hour ago'] = '1 hour ago';
                groups.langStrings['1 hour from now'] = '1 hour from now';
                groups.langStrings['months'] = 'months';
                groups.langStrings['years'] = 'years';
                groups.langStrings['minutes'] = 'minutes';
                groups.langStrings['from now'] = 'from now';
                groups.langStrings['yesterday'] = 'yesterday';
                groups.langStrings['tomorrow'] = 'tomorrow';
                groups.langStrings['days'] = 'days';
                groups.langStrings['last week'] = 'last week';
                groups.langStrings['weeks'] = 'weeks';
                groups.langStrings['next week'] = 'next week';
                groups.langStrings['last month'] = 'last month';
                groups.langStrings['last year'] = 'last year';
                groups.langStrings['last century'] = 'last century';
                groups.langStrings['next century'] = 'next century';
                groups.langStrings['centuries'] = 'centuries';
                groups.langStrings['next year'] = 'next year';

                groups.langStrings['Adding your comment...'] = 'Adding your comment...';
                groups.langStrings['Comment added.'] = 'Comment added.';
                groups.langStrings['Comment deleted.'] = 'Comment deleted.';
                groups.langStrings['Deleting comment...'] = 'Deleting comment...';
                groups.langStrings['Group Chat'] = 'Group Chat';

                groups.langStrings['Page design saved.'] = 'Page design saved.';
                groups.langStrings['Deleting block...'] = 'Deleting block...';
                groups.langStrings['Add New Standard Modules'] = 'Add New Standard Modules';
                groups.langStrings['Saving page design...'] = 'Saving page design...';
                groups.langStrings['Getting block info...'] = 'Getting block info...';
                groups.langStrings['Updating block...'] = 'Updating block...';
                groups.langStrings['Adding block...'] = 'Adding block...';
                groups.langStrings['Add New Block'] = 'Add New Block';
                groups.langStrings['You can use some HTML'] = 'You can use some HTML';
                groups.langStrings['Back'] = 'Back';
                groups.langStrings['Add'] = 'Add';
                groups.langStrings['Add New Google Gadget'] = 'Add New Google Gadget';
                groups.langStrings['Standard Blocks'] = 'Standard Blocks';
                groups.langStrings['App Gadgets'] = 'App Gadgets';
                groups.langStrings['Google Gadgets'] = 'Google Gadgets';
                groups.langStrings['Flexible HTML Box'] = 'Flexible HTML Box';
                groups.langStrings['Built-in blocks tailored to this app, such as top contributors.'] = 'Built-in blocks tailored to this app, such as top contributors.';
                groups.langStrings['Check out the Google Gadget Gallery to find nifty new features to add to your network.'] = 'Check out the Google Gadget Gallery to find nifty new features to add to your network.';
                groups.langStrings['The block you want is not here? Enter your own HTML code here to integrate external codes, create ads, and more.'] = 'The block you want is not here? Enter your own HTML code here to integrate external codes, create ads, and more.';
                groups.langStrings['Use this module if you would like to display feeds from other apps.'] = 'Use this module if you would like to display feeds from other apps.';
                groups.langStrings['You have already added all the blocks.'] = 'You have already added all the blocks.';

                groups.langStrings['Deleting draft...'] = 'Deleting draft...';
                groups.langStrings['Delete External Blogs'] = 'Delete External Blogs';
                groups.langStrings['There is no blog to delete.'] = 'There is no blog to delete.';
                groups.langStrings['Click to continue...'] = 'Click to continue...';
                groups.langStrings['Content'] = 'Content';
                groups.langStrings['Title'] = 'Title';
                groups.langStrings['New Entry'] = 'New Entry';
                groups.langStrings['Add Blog'] = 'Add Blog';
                groups.langStrings['RSS Feed'] = 'RSS Feed';
                groups.langStrings['Write a new blog post from right here inside this network.'] = 'Write a new blog post from right here inside this network.';
                groups.langStrings['Add an RSS feed/a blog from another website to the blog section in this network.'] = 'Add an RSS feed/a blog from another website to the blog section in this network.';

                groups.langStrings['Select a video file'] = 'Select a video file';

                groups.langStrings['Save as template'] = 'Save as template';

                groups.langStrings['Uploading image...'] = 'Uploading image...';
                groups.langStrings['Cropping image...'] = 'Cropping image...';
                groups.langStrings['Updating profile information...'] = 'Updating profile information...';
                groups.langStrings['Information saved successfully. (You need to <a style="text-decoration:underline" href="javascript:void(document.location.reload(true))">refresh the page</a> to see the changes.)'] = 'Information saved successfully. (You need to <a style="text-decoration:underline" href="javascript:void(document.location.reload(true))">refresh the page</a> to see the changes.)';
                groups.langStrings['Updating answers to profile questions...'] = 'Updating answers to profile questions...';
                groups.langStrings['Freezing profile...'] = 'Freezing profile...';
                groups.langStrings['Unfreezing profile...'] = 'Unfreezing profile...';
                groups.langStrings['Adding to friend list...'] = 'Adding to friend list...';
                groups.langStrings['Poking %s...'] = 'Poking %s...';
                groups.langStrings['Loading cropper...'] = 'Loading cropper...';
                groups.langStrings['Adjusting thumbnail...'] = 'Adjusting thumbnail...';
                groups.langStrings['Saving tab settings...'] = 'Saving tab settings...';

                groups.langStrings['Tag This Photo'] = 'Tag This Photo';
                groups.langStrings['Finish Tagging'] = 'Finish Tagging';
                groups.langStrings['You should write more for a tag.'] = 'You should write more for a tag.';
                groups.langStrings['Deleting tag...'] = 'Deleting tag...';
                groups.langStrings['Rotating...'] = 'Rotating...';
                groups.langStrings['Loading rotated image...'] = 'Loading rotated image...';
                groups.langStrings['Saving tags...'] = 'Saving tags...';

                groups.langStrings['Oops, temporary error occurred. Please try again...'] = 'Oops, temporary error occurred. Please try again...';
                groups.langStrings['Search in %s'] = 'Search in %s';
                groups.langStrings['You should fill %s field to add comment.'] = 'You should fill %s field to add comment.';
                groups.langStrings['Loading...'] = 'Loading...';
                groups.langStrings['Saving page...'] = 'Saving page...';

                groups.langStrings['Loading template...'] = 'Loading template...';
                groups.langStrings['Uploading...'] = 'Uploading...';
                groups.langStrings['Saving page...'] = 'Saving page...';
                groups.langStrings['Add New Standard Block'] = 'Add New Standard Block';

                function dont_show_change_layout()
                {
                    groups.RenderController.renderPageBusy();
                    x_dont_show_change_layout(dont_show_change_layout_result);
                }
                function dont_show_change_layout_result(res)
                {
                    groups.RenderController.hideModal();
                    document.getElementById('topbar_info_text').innerHTML = res;
                }


                /*ajax_javascript*/
                window.applySajaxMethods = function(){['ExtraPages_addExtraPage','ExtraPages_getAddModulePanel','ExtraPages_get3rdAddModulePanel','ExtraPages_activateModules','ExtraBlocks_addBlock','ExtraBlocks_removeBlock','ExtraBlocks_selectBlock','ExtraBlocks_editBlock','ExtraBlocks_editBlockWithContentLimit','ExtraBlocks_savePageDesign','ExtraBlocks_getModulesListForModuleBox','video_changeButtonsHTML','getVideos','video_pages','shareVideo','selectVideo','editVideo','deleteVideo','showTaggedVideos','video_addComment','video_deleteComment','videos_addBlock','videos_removeBlock','videos_moveBlockUp','videos_moveBlockDown','videos_selectBlock','videos_editBlock','videos_pointUp','videos_pointDown','deleteAction','saveStatusMessage','getMemberActions','addTwitterAssociation','reportIssue','facebookconnect_signup','zendSupport','sendSupportTicket','facebookconnect_control','updateEntrySimple','pollVote','dont_show_change_layout','ExtraBlocks_getModulesListForModuleBox','getModulesListForModuleBox','ExtraBlocks_addBlock'].each(function(f){window["x_"+f]=function(){return _S(f, Array.prototype.slice.apply(arguments));};});};

                /*ajax_functions*/
    
                function twitterAssociation() {
                    var txt = '';
                    txt += '<h1>Twitter Association:</h1>';
                    txt += '<form class=\"groupsForm\" id=\"twitter\">';
                    txt += '<label class=\"formTitle\">Twitter Username:</label>';
                    txt += '<div><input type=\"text\" id=\"username\" required=\"1\" realname=\"Username\" value=\"\" class=\"medium\"></div>';
                    txt += '<label class=\"formTitle\">Twitter Password:</label>';
                    txt += '<div><input type=\"password\" id=\"passwd\" required=\"1\" realname=\"Password\" value=\"\" class=\"medium\"></div>';
                    txt += '<div><input type=\"button\" value=\"Save\" onclick=\"twitterAssociationSubmit(this.form)\"> <input type=\"button\" name=\"back\" value=\"Cancel\" onclick=\"groups.RenderController.hideModal()\" class=\"cancel_button\"></div>';
                    txt += '</form>';
                    groups.RenderController.showModal(txt);
                }

                function twitterAssociationSubmit(formobj)
                {
                    if (!validateCompleteForm(formobj,'error')) return false;

                    groups.RenderController.renderPageBusy();

                    var twitter_username = document.getElementById('username').value;
                    var twitter_password = document.getElementById('passwd').value;

                    x_addTwitterAssociation(twitter_username,twitter_password,addTwitterAssociationCB);
                }

                function addTwitterAssociationCB(result)
                {
                    if (result)
                    {
                        groups.RenderController.renderPageIdle();
                        twitterAssociation.disabled = true;
                        groups.notifier.show('success','Your Twitter account is successfully associated with your account');
                    }
                    else
                    {
                        groups.RenderController.showModal('<h1>Twitter Association</h1>Error. Please <a href=\"javascript:twitterAssociation()\">try</a> again...');
                    }
                }

                var charLimit = 140;
                function controlCharLimit(textarea_obj) {
                    var text = textarea_obj.value;
                    var length = text.length;
                    var left = charLimit - length;
                    var status_char_left_obj = xGetElementById('status_char_left');
                    status_char_left_obj.innerHTML = left;
                    if(left<0) {
                        xGetElementById('status_msg_button').disabled = true;
                        xGetElementById('status_button_div').className = 'status_button_disabled';
                        status_char_left_obj.style.color = 'red';
                    } else {
                        xGetElementById('status_msg_button').disabled = false;
                        xGetElementById('status_button_div').className = 'status_button';
                        status_char_left_obj.style.color = '';
                    }
                }

                function saveStatusMessage() {
                    var msg_obj = xGetElementById('status_msg');
                    var msg = msg_obj.value.replace(/^\s+|\s+$/g,"");
                    if(msg!='') {
                        msg_obj.disabled = true;
                        xGetElementById('status_msg_button').disabled = true;
                        xGetElementById('status_button_div').className = 'status_button_disabled';
                        x_saveStatusMessage(msg,saveStatusMessageResult);
                    }
                }

                status_message_count = 0;
                function saveStatusMessageResult(res) {
                    var status = res[0];
                    var msg = res[1];
                    if(!status) {
                        alert(msg);
                    }
                    else {
                        if(msg=='') {
                            window.location.href = location.href;
                        } else {
                            var latest_activity = xGetElementById('latest_activity_container');
                            var old_content = latest_activity.innerHTML;
                            latest_activity.innerHTML = '<div id="new_status_msg_'+status_message_count+'" style="display:none">'+msg+'</div>'+old_content;
                            new Effect.Appear('new_status_msg_'+status_message_count);
                            var msg_obj = xGetElementById("status_msg");
                            msg_obj.value = "";
                            msg_obj.disabled = false;
                            xGetElementById('status_msg_button').disabled = false;
                            xGetElementById('status_button_div').className = 'status_button';
                            xGetElementById('status_char_left').innerHTML = charLimit;
                            status_message_count++;
                        }
                    }
                }			var zzz_actid = -1;
                function deleteAction(act_id,status) {
                    var confirmDelete = confirm('Are you sure that you want to delete this activity permanently?');
                    if(confirmDelete) {
                        groups.RenderController.renderPageBusy();
                        zzz_actid = act_id;
                        x_deleteAction(act_id,status,deleteActionResult);
                    }
                }

                function deleteActionResult(res) {
                    if(!res[0]) {
                        alert(res[1]);
                        groups.RenderController.hideModal();
                    } else {
                        Effect.DropOut('la_unit_'+zzz_actid);
                        groups.RenderController.hideModal();
                    }
                }
                var load_more_member_id = 0;
                function loadMoreAction(member_id) {
                    groups.RenderController.renderPageBusy();
                    xGetElementById("load_more_link").href = "javascript:;";
                    load_more_member_id = member_id;

                    var wall_messages = document.getElementsByName("min_wall_msg");
                    var wall_messages_length = wall_messages.length;
                    var wall_messages_value = "";
                    var min_wall_msg = 0;
                    var actions = document.getElementsByName("min_action");
                    var actions_length = actions.length;
                    var actions_value = "";
                    var min_action = 0;
                    var i = 0;

                    for(i=0;i<wall_messages_length;i++) {
                        wall_messages_value = wall_messages[i].value;
                        if(min_wall_msg==0) {
                            min_wall_msg = wall_messages_value;
                        }
                        else {
                            if(wall_messages_value!=0)
                                min_wall_msg = min_wall_msg>wall_messages_value?wall_messages_value:min_wall_msg;
                        }
                    }
                    for(i=0;i<actions_length;i++) {
                        actions_value = actions[i].value;
                        if(min_action==0) {
                            min_action = actions_value;
                        }
                        else {
                            if(actions_value!=0)
                                min_action = min_action>actions_value?actions_value:min_action;
                        }
                    }

                    x_getMemberActions(member_id,min_action,min_wall_msg,"html",loadMoreActionResult);
                }

                function loadMoreActionResult(res) {
                    var obj = xGetElementById("old_actions_container");
                    if(res!="") {
                        var result = res.split("__SPLIT__");
                        var actions = result[0];
                        var count = result[1]+"";
                        if(count!="20")
                            xDisplay("load_more","none");
                        obj.innerHTML += actions;
                    }
                    else {
                        xDisplay("load_more","none");
                    }

                    if(load_more_member_id!=0)
                        xGetElementById("load_more_link").href = "javascript:loadMoreAction("+load_more_member_id+")";
                    load_more_member_id = 0;
                    groups.RenderController.hideModal();
                }

		
                var add_from = 'admin';
                var extra_page_container = '';
                var extra_page_key = '';

                // Cache Variables
                var static_page_title = '';
                var static_page_who_can_see = '';
                var link_title = '';
                var link_link = '';
                var link_link_type = '';
                var link_who_can_see ='';

                function EP_addNewPage(from) {
                    if(from!="admin")
                        add_from = "menu";

                    replacements =
                        {
                        addFrom: add_from
                    };

                    groups.modalBox.show("addPage", { replacements: replacements } , "_common");
                }

                function EP_addStaticPageForm() {
                    var txt = '<form class="groupsForm" name="addStaticPageForm" onsubmit="return false;">';
                    txt += '<label class="formTitle">Title:</label>';
                    txt += '<div><input type="text" id="page_title" maxlength="50" required="1" realname="Title" /></div>';

                    /*
                                    txt += '<label class="formTitle">Page Layout:</label>';
                                    txt += '<div>';
                                    txt += '<table>';
                                    txt += '	<tbody><tr>';
                                    txt += '		<td>';
                                    txt += '			<label for="edit_page_view_right"><img src="http://com/images/popup_layout_sidebar.gif" alt="Right Sidebar"></label><br>';
                                    txt += '			<input type="radio" name="edit_page_view" id="edit_page_view_right" value="right"> <label for="edit_page_view_right" class="formTitle">Right sidebar</label>';
                                    txt += '		</td>';
                                    txt += '		<td>';
                                    txt += '			<label for="edit_page_view_left"><img src="http://com/images/popup_layout_menubar.gif" alt="Left Sidebar"></label><br>';
                                    txt += '			<input type="radio" name="edit_page_view" id="edit_page_view_left" value="left"> <label for="edit_page_view_left" class="formTitle">Left sidebar</label>';
                                    txt += '		</td>';
                                    txt += '		<td>';
                                    txt += '			<label for="edit_page_view_full"><img src="http://com/images/popup_layout_full.gif" alt="Full View"></label><br>';
                                    txt += '			<input type="radio" name="edit_page_view" id="edit_page_view_full" checked="checked"  value="full"> <label for="edit_page_view_full" class="formTitle">Full view</label>';
                                    txt += '		</td>';
                                    txt += '	</tr>';
                                    txt += '</tbody></table>';
                                    txt += '</div>';
                     */

                    txt += '<label class="formTitle">Who Can See:</label>';
                    txt += '<div class="FormTopPadding"><input type="radio" name="page_who_can_see" id="page_who_can_see_anyone" checked="checked" /> <label for="page_who_can_see_anyone">Anyone</label>';
                    txt += ' <input type="radio" name="page_who_can_see" id="page_who_can_see_members"  /> <label for="page_who_can_see_members">Members</label> <style>.content_info_box{margin-left:0px !important}</style></div>';
                    txt += '<div><input type="button" value="Submit" onclick="EP_addStaticPageSubmit(this.form)" /><input class="cancel_button" type="button" value="Back" onclick="EP_addNewPage(\''+add_from+'\')" /></div>';
                    txt += '</form>';
                    return txt;
                }

                function EP_addStaticPage() {
                    groups.RenderController.showModal('<h1><span class="module_box_icon module_box_joker"></span>Add Static Page</h1>'+EP_addStaticPageForm());
                }

                function EP_addStaticPageSubmit(formobj) {
                    if(!validateCompleteForm(formobj,'error')) return false;
                    groups.RenderController.renderPageBusy();
                    var title = xGetElementById('page_title').value;
                    var who_can_see = 'anyone';
                    /*
                                    var pageLayout = '';
                                    var pageLayoutOptions = document.addStaticPageForm.edit_page_view;
                                    var pageLayoutOptionsLength = pageLayoutOptions.length;
                                    for(i = 0; i < pageLayoutOptionsLength; i++)
                                    {
                                            if(pageLayoutOptions[i].checked)
                                            {
                                                    pageLayout = pageLayoutOptions[i].value;
                                                    break;
                                            }
                                    }
                     */

                    if(xGetElementById('page_who_can_see_members').checked)
                        who_can_see = 'members';

                    static_page_title = title;
                    static_page_who_can_see = who_can_see;
                    x_ExtraPages_addExtraPage(title,'internal','',static_page_who_can_see, EP_addStaticPageResult);
                }

                function EP_addStaticPageResult(res) {
                    var status = res[0];
                    var msg = res[1];
                    if(status) {
                        if(add_from=='admin') {
                            extra_page_key = msg;
                            extra_page_container = res[2];
                            var txt = '<h1>Add Static Page</h1>';
                            txt += '<div class="info">Extra page is successfully added. You can edit it\'s content in a new page by clicking <a href="javascript:EP_goToStaticPage()">here</a>. <a href="javascript:EP_continueToAdministrate()">Click</a> to continue...</div>';
                            groups.RenderController.showModal(txt);
                        }
                        else {
                            window.location.href = 'http://LoLcodex.com/'+res[1]+'/edit';
                        }
                    }
                    else {
                        txt = '<h1>Add Static Page</h1>';
                        txt += '<div class="msg_error">'+msg+'</div>';
                        txt += EP_addStaticPageForm();
                        groups.RenderController.showModal(txt);
                        xGetElementById('page_title').value = static_page_title;
                        xGetElementById('page_who_can_see_'+static_page_who_can_see).checked = true;
                    }

                    static_page_title = '';
                    static_page_who_can_see = '';
                }

                function EP_goToStaticPage() {
                    if(extra_page_key!='' ) {
                        window.open('http://LoLcodex.com/'+extra_page_key+'/edit','static_page');
                    }
                }

                function EP_continueToAdministrate() {
                    groups.RenderController.hideModal();
                    if(extra_page_container!='' ) {
                        addItem(extra_page_container);
                        extra_page_container = '';
                        extra_page_key = '';
                    }
                }

                function EP_addLinkForm() {
                    var txt = '<form class="groupsForm" onsubmit="return false;">';
                    txt += '<label class="formTitle">Title:</label>';
                    txt += '<div><input type="text" id="page_title" maxlength="50" required="1" realname="Title" /></div>';
                    txt += '<label class="formTitle">Link:</label>';
                    txt += '<div><input type="text" id="page_content" required="1" realname="Link" value="http://"/></div>';
                    txt += '<label class="formTitle">Link Type:</label>';
                    txt += '<div class="FormTopPadding"><input type="radio" name="page_content_type" id="page_content_type_iframe" checked="checked" /> <label for="page_content_type_internal">Internal (Iframe)</label>';
                    txt += ' <input type="radio" name="page_content_type" id="page_content_type_external" /> <label for="page_content_type_external">External</label></div>';
                    txt += '<label class="formTitle">Who Can See:</label>';
                    txt += '<div class="FormTopPadding"><input type="radio" name="page_who_can_see" id="page_who_can_see_anyone" checked="checked" /> <label for="page_who_can_see_anyone">Anyone</label>';
                    txt += ' <input type="radio" name="page_who_can_see" id="page_who_can_see_members"  /> <label for="page_who_can_see_members">Members</label> <style>.content_info_box{margin-left:0px !important}</style></div>';
                    txt += '<div><input type="button" value="Submit" onclick="EP_addLinkSubmit(this.form)" /><input class="cancel_button" type="button" value="Back" onclick="EP_addNewPage(\''+add_from+'\')" /></div>';
                    txt += '</form>';
                    return txt;
                }

                function EP_addLink() {
                    groups.RenderController.showModal('<h1><span class="module_box_icon module_box_joker"></span>Add Link</h1>'+EP_addLinkForm());
                }

                function EP_addLinkSubmit(formobj) {
                    if(!validateCompleteForm(formobj,'error')) return false;
                    groups.RenderController.renderPageBusy();
                    var title = xGetElementById('page_title').value;
                    var content = xGetElementById('page_content').value;
                    var type = 'iframe';
                    if(xGetElementById('page_content_type_external').checked)
                        type = 'external';
                    var who_can_see = 'anyone';
                    if(xGetElementById('page_who_can_see_members').checked)
                        who_can_see = 'members';

                    link_title = title;
                    link_link = content;
                    link_link_type = type;
                    link_who_can_see = who_can_see;
                    x_ExtraPages_addExtraPage(title,type,content,who_can_see,EP_addLinkResult);
                }

                function EP_addLinkResult(res) {
                    var status = res[0];
                    var msg = res[1];
                    if(status) {
                        if(add_from=='admin') {
                            groups.RenderController.hideModal();
                            addItem(res[2]);
                        }
                        else {
                            if(link_link_type=='external') {
                                extra_page_key = msg;
                                var txt = '<h1>Add Link</h1>';
                                txt += '<div class="info">External link is successfully added. If you want to go to this address, click <a href="javascript:EP_goToLink()">here</a> or <a href="javascript:document.location.reload(true)">click</a> to continue...</div>';
                                groups.RenderController.showModal(txt);
                            }
                            else {
                                window.location.href = 'http://LoLcodex.com/'+res[1];
                            }

                        }
                    }
                    else {
                        txt = '<h1>Add Link</h1>';
                        txt += '<div class="msg_error">'+msg+'</div>';
                        txt += EP_addLinkForm();
                        groups.RenderController.showModal(txt);
                        xGetElementById('page_title').value = link_title;
                        xGetElementById('page_content').value = link_link;
                        xGetElementById('page_content_type_'+link_link_type).checked = true;
                        xGetElementById('page_who_can_see_'+link_who_can_see).checked = true;
                    }

                    link_title = '';
                    link_link = '';
                    link_link_type = '';
                    link_who_can_see = '';
                }

                function EP_goToLink() {
                    if(extra_page_key!='' ) {
                        window.location.href = 'http://LoLcodex.com/'+extra_page_key;
                        extra_page_key = '';
                    }
                }

                function EP_checkBox(input_id) {
                    var obj = xGetElementById(input_id);
                    var obj_checked = obj.checked;
                    obj.checked = !obj_checked;
                }

                function EP_addModule(addFrom) {

                    groups.modalBox.show(
                    "addModule",
                    {
                        afterShow: function()
                        {
                            if ($("groups_addModuleTabs")) {
                                new ProtoTabs(
                                "groups_addModuleTabs",
                                {
                                    contentInfo:
                                        {
                                        "tab_internal_modules-content": {contentId: "addInternalModule", module: "_common", replacements: function(callback){x_ExtraPages_getAddModulePanel(addFrom,callback)}},
                                        "tab_3rd_party_modules-content": {contentId: "add3rdPartyModule", module: "_common", replacements: function(callback){x_ExtraPages_get3rdAddModulePanel(addFrom,callback)}}
                                    }
                                }
                            );
                            }
                        }
                    },
                    "_common"
                );
                }

                function EP_activateModules(addFrom) {
                    groups.RenderController.renderPageBusy();


                    var modules = '';
                    var all_modules = document.getElementsByName('modules');
                    var all_modules_length = all_modules.length;
                    for(var i=0;i<all_modules_length;i++) {
                        if(all_modules[i].checked) {

                            if(modules!='')
                                modules += '__SPLIT__';

                            modules += all_modules[i].value;
                        }
                    }

                    x_ExtraPages_activateModules(modules,addFrom,activateModulesResult);
                }

                function activateModulesResult(res) {

                    if(res!=""&&res!="admin") {


                        document.location.href = "http://LoLcodex.com/" + res;

                        /*
                                            if(add_from=='admin') {
                                                    groups.RenderController.hideModal();
                                                    addItem(res);
                                            }
                                            else {
                                                    var txt = '<h1>Add Module</h1>';
                                                    txt += '<div class="info">Your changes are successfully saved. If you want to administrate your pages, click <a href="http://LoLcodex.com/admin/pages">here</a> or <a href="javascript:document.location.reload(true)">click</a> to continue...</div>';
                                                    groups.RenderController.showModal(txt);
                                            }*/

                    } else {
                        document.location.href = "http://LoLcodex.com/admin/pages";
                        //document.location.reload(true);
                    }
                }

                var VIDEOS_LIMIT_EXCEEDED = false;		var currentID = false;
                var isMember =  true;
                var group = 'LoLcodex';
                var oldTags = false;
                var videos = false;

                function changeButtonsHTML(mode) {
                    switch(mode)
                    {
                        case 0:
                            var html = '<form><input type="button" value="Upload New Video" onclick="uploadVideo();return false"/> <input type="button" value="Share Video" onclick="shareVideo();return false"/></form>';
                            changeButtonsHTMLResult(html);
                            break;
                        case 1:
                            x_video_changeButtonsHTML(currentID,changeButtonsHTMLResult);
                            break;
                        case 2:
                            var html = '<form><input type="button" value="Show All Videos" onclick="showAllVideos()" />	<input type="button" value="Upload New Video" onclick="uploadVideo();return false"/> <input type="button" value="Share Video" onclick="shareVideo();return false"/></form>';
                            changeButtonsHTMLResult(html);
                            break;
                    }
                }

                function changeButtonsHTMLResult(html) {
                    var buttonsDiv = document.getElementById('block_no_3');
                    buttonsDiv.innerHTML = html;
                }

                function showAllVideos() {
                    groups.RenderController.renderPageBusy();
                    x_getVideos(getPages);
                }

                function getPages(video_results) {
                    videos = video_results;
                    x_video_pages('http://com/','LoLcodex','0','20',1,showAllVideosResult);
                }

                function showAllVideosResult(pages) {
                    changeButtonsHTML(0);
                    xDisplay("hidden_block_2","none");
                    xDisplay("top_block_no_2","none");
                    xDisplay("top_block_no_1","block");
                    xDisplay("hidden_block_1","block");
                    var videosDiv = document.getElementById('block_no_4');
                    videosDiv.innerHTML = videos;
                    var commentsDiv = document.getElementById('block_no_5');
                    commentsDiv.innerHTML = pages;
                    xDisplay("hidden_block_5","none");
                    groups.RenderController.hideModal();
                }

                function showTaggedVideos(tag) {
                    groups.RenderController.renderPageBusy();
                    x_showTaggedVideos(tag,showTaggedVideosResult);
                }

                function showTaggedVideosResult(videos) {
                    changeButtonsHTML(2);
                    var videosDiv = document.getElementById('block_no_4');
                    videosDiv.innerHTML = videos;
                    xDisplay("hidden_block_5","none");
                    groups.modalBox.hide();
                }

                function old_uploadVideo() {
                    var txt = '<h1><span class="module_box_icon module_box_videos"></span>Upload New Video</h1>';
                    if(VIDEOS_LIMIT_EXCEEDED) {
                        txt += '<div class="info">The group has exceeded the storage limit. <a href="javascript:groups.RenderController.hideModal()">Click</a> to continue...</div>';
                        groups.RenderController.showModal(txt);
                    }
                    else {
                        if(false) {
                            // txt += 'Video upload <u>temporarily</u> disabled. You may try sharing via embed code.';
                            uploadAlternative();
                        }
                        else {
                            if(isMember) {
                                txt += '<form class=\"groupsForm\"method="POST" action="http://LoLcodex.com/videos/upload" enctype="multipart/form-data">';
                                txt += '<label class=\"formTitle\">Video File:</label>';
                                txt += '<div><input type="hidden" name="traditional" value="1" /></div>';
                                txt += '<div><input required="1" type="file" id="upload" name="upload" onfocus="inputfocus(this)" onblur="inputblur(this)" /></div><div class="FormSubText">Max 50 MB</div>';

                                txt += '<label class=\"formTitle\">Title:</label><div><input type="text" id="utitle" name="utitle" onfocus="inputfocus(this)" onblur="inputblur(this)" required="1" realname="Title" /></div>';
                                txt += '<label class=\"formTitle\">Tags:</label><div><input type="text" id="utags" name="utags" realname="Tags" onfocus="inputfocus(this)" onblur="inputblur(this)" /></div><div class=\"FormSubText\">Separate by comma</div>';
                                txt += '<div class=\"module_box_button_container\"><input type="button" class="cancel_button" value="Cancel" onclick="groups.RenderController.hideModal()" /><input type="button" value="Upload" onclick="old_uploadVideoSubmit(this.form,this)" /></div></form>';

                            } else
                                txt = 'You could share video if you were a member. <a href="http://com/'+group+'/join">Click to join this group!</a>';
                            groups.RenderController.showModal(txt);
                        }

                    }
                }

                function uploadVideo(default_panel) {
                    replacements =
                        {
                        max_size_string: 'Max 50 MB',
                        facebook_share: '',
                        domname : 'http://LoLcodex.com',
                        xhost: 'http://LoLcodex.com/',
                        group_name: 'LoLcodex',
                        is_share_enabled: '',
                        share_from_anywhere_string: '',
                        share_from_anywhere_html: '',
                        share_from_supported_service: '',
                        supported_services: '',
                        hidden_form_uploader: ''
                    };

                    if(VIDEOS_LIMIT_EXCEEDED) {
                        groups.notifier.show('error', 'The group has exceeded the storage limit.');
                        return;
                    }
                    else if (groups._info.userId == "0")
                    {
                        groups.notifier.show('error', 'You could share video if you were a member. <a href="http://LoLcodex.com/join">Click to join this group!</a>');
                        return;
                    }

                    replacements.supported_services = '<div class="FormSubText">YouTube &bull; MetaCafe &bull; DailyMotion</div>';replacements.share_from_supported_service = '<input required="1" type="text" id="link" value="http://" onfocus="inputfocus(this)" onblur="inputblur(this)" />';replacements.tags_as_html = '<label class="formTitle">Tags:</label><div><input type="text" id="utags" name="utags" realname="Tags" /></div><div class="FormSubText">Separate by comma</div>';replacements.tags_as_share = '<label class="formTitle">Tags:</label><div><input type="text" id="tags" onfocus="inputfocus(this);" onblur="inputblur(this);" /></div><div class="FormSubText">Separate by comma</div>';
                    groups.modalBox.show(
                    'uploadVideos',
                    {
                        replacements: replacements,
                        afterShow: function()
                        {
                            window.setTimeout(function(){

                                Prototype.Browser.IE9 = Prototype.Browser.IE && parseInt(navigator.userAgent.substring(navigator.userAgent.indexOf("MSIE")+5)) == 9;
                                if(Prototype.Browser.IE9) {
                                    $('videos_from_computer').observe('click', respond);
                                    function respond(event) {
                                        old_uploadVideo();
                                    }
                                }

                                groups._uploader = new SWFUpload({
                                    // Backend Settings
                                    upload_url: "/includes/php_lib/fuploader/upload.php",
                                    file_post_name: "SolmetraUploader",

                                    //tags

                                    // File Upload Settings
                                    file_size_limit : "506001",	// 500 Mb
                                    file_types : "*.avi;*.mpg;*.mpeg;*.mp4;*.mov;*.wmv;*.flv",
                                    file_types_description : "Video Files",
                                    file_upload_limit : "0",
                                    file_queue_limit : "1",

                                    // Event Handler Settings
                                    file_queued_handler : fileQueued,
                                    file_queue_error_handler : fileQueueError,
                                    file_dialog_complete_handler : fileDialogComplete,
                                    upload_start_handler : uploadStart,
                                    upload_progress_handler : uploadProgress,
                                    upload_error_handler : uploadError,
                                    upload_success_handler : uploadSuccess,
                                    upload_complete_handler : uploadComplete,

                                    // Button Settings
                                    button_placeholder_id : "spanButtonPlaceholder2",
                                    button_image_url: '/images/ButtonUploadBg2.png',
                                    button_width: 383,
                                    button_height: 27,
                                    button_text_top_padding: 5,
                                    button_text: '<span class="button">' + groups.i18n('Select a video file') + '</font>',
                                    button_text_style: '.button{font-family: "Tahoma"; text-align: center;}',

                                    // Flash Settings
                                    flash_url : "/includes/swfupload/swf/swfupload.swf",

                                    swfupload_element_id : "flashUI2",		// Setting from graceful degradation plugin
                                    degraded_element_id : "degradedUI2",	// Setting from graceful degradation plugin

                                    custom_settings : {
                                        progressTarget : "fsUploadProgress2",
                                        cancelButtonId : "btnCancel2"
                                    }
                                });}, 75);

                            default_panel = 1;
                            // alert('Default Panel | ' + default_panel);
                            if (default_panel == 1) {
                                if ($("tabVideos")) {
                                    new ProtoTabs('tabVideos', {defaultPanel: 'videos_from_computer-content'});
                                }
                            } else {
                                if ($("tabVideos")) {
                                    new ProtoTabs('tabVideos', {defaultPanel:'videos_from_share-content'});
                                }
                            }
                        }
                    }
                );
                }

                function uploadVideoSubmit(formobj)
                {
                    if(!validateCompleteForm(formobj,'error'))
                        return false;

                    var uploaderStats = groups._uploader.getStats();
                    if (uploaderStats.files_queued && !uploaderStats.successful_uploads)
                    {
                        groups._uploader.startUpload();
                        return false;
                    }
                    else if (!uploaderStats.files_queued && !uploaderStats.successful_uploads)
                    {
                        groups.notifier.show('info', 'You should select a file to upload.');
                        return false;
                    }

                    var shareOnFacebook = document.getElementById('share_on_facebook');
                    if(shareOnFacebook && shareOnFacebook.checked && !formobj.__fbcheck)
                    {
                        formobj.__fbcheck = true;
                        FB.Facebook.apiClient.users_hasAppPermission(
                        "publish_stream",
                        function(res)
                        {

                            formobj.submit();
                        }
                    );
                        return false;
                    }
                    return true;
                }

                function old_uploadVideoSubmit(formobj,b) {
                    if(!validateCompleteForm(formobj,'error')) return false;
                    b.value = "Uploading...";
                    b.disabled = true;
                    formobj.submit();
                }

		

                current_operation = 'share';
                function shareVideo() {

                    var txt = '<h1>Share Video</h1>';
                    if(isMember) {
                        txt += '<iframe style="display:none" id="thumbnail_upload_frame" name="thumbnail_upload_frame"></iframe>';
                        txt += '<form class="groupsForm" name="tmb_uploader" id="tmb_uploader" action="http://LoLcodex.com/includes/videos_thumbnail_uploader.php" ENCTYPE="multipart/form-data" method="post" target="thumbnail_upload_frame">';
                        txt += '<input type="hidden" name="group_name" id="group_name" value="LoLcodex" />';
                        txt += '<input type="hidden" name="video_on_groups" id="video_on_groups" value="" />';
                        txt += '<input type="hidden" name="action" id="action" value="share" />';
                        txt += '<div id="share_video_link"><label class="formTitle">Video Link:</label>';
                        txt += '<div><input required="1" type="text" id="link" value="http://" onfocus="inputfocus(this)" onblur="inputblur(this)" /></div><div class="FormSubText">YouTube &bull; MetaCafe &bull; DailyMotion</div>';				txt += '<label class="formTitle">Title:</label><div><input required="1" type="text" id="title" onfocus="inputfocus(this)" onblur="inputblur(this)" /></div>';
                        txt += '<label class="formTitle">Tags:</label><div><input type="text" id="tags" onfocus="inputfocus(this)" onblur="inputblur(this)" /></div><div class="FormSubText">Separate by comma</div>';
                        txt += '<div id="video_thumb_question_div"><a href="javascript:showThumbnailUploadForm()">Do you want to upload a custom thumbnail for this video?</a></div>';
                        txt += '<div id="video_thumb_div" style="display:none"><label class="formTitle">Thumbnail:</label><div><input type="file" name="thumbnail" id="thumbnail"/></div></div>';        txt += '<div><input type="button" value="Share" onclick="shareVideoSubmit(this.form)" /><input type="button" class="cancel_button" value="Cancel" onclick="groups.RenderController.hideModal()" /></form>';
                    } else
                        txt = 'You could share video if you were a member. <a href="http://LoLcodex.com/join">Click to join this group!</a>';
                    groups.RenderController.showModal(txt);
                }

                function showThumbnailUploadForm() {
                    xDisplay('video_thumb_question_div','none');
                    xDisplay('video_thumb_div','block');
                }

                var custom_thumbnail = 0;
                function shareVideoSubmit(formobj) {
                    current_operation = 'share';
                    if(!validateCompleteForm(formobj,'error')) return false;
                    var link = xGetElementById('link').value;
                    var title = xGetElementById('title').value;
                    var tags = xGetElementById('tags').value;
                    var shareOnFacebook = document.getElementById('share_on_facebook');
                    if(xGetElementById('thumbnail').value)
                        custom_thumbnail = 1;

                    //groups.RenderController.renderPageBusy();
                    groups.RenderController.hideModal();
                    groups.notifier.show('loader','Loading...');
                    if( !shareOnFacebook ) {
                        x_shareVideo(link,title,tags,custom_thumbnail,0,shareVideoResult);
                    } else {         if(shareOnFacebook.checked) {
                            x_shareVideo(link,title,tags,custom_thumbnail,1,shareVideoResult);
                        } else {
                            x_shareVideo(link,title,tags,custom_thumbnail,0,shareVideoResult);
                        }
                    }		}

                function shareVideoResult(video) {
                    if(video[0]===1) {
                        if(custom_thumbnail) {
                            custom_thumbnail = 0;
                            xGetElementById('loader').innerHTML = '<blink>You have successfully shared the video. Now uploading thumbnail of the video, please wait...</blink>';
                            xGetElementById('video_on_groups').value = video[1];
                            document.tmb_uploader.submit();
                        } else {
                            window.location.href = video[1];
                        }
                    } else if(video[0]===0) {
                        var txt = video[1];
                        groups.RenderController.showModal('<h1>Share Video</h1>'+txt);
                    } else {
                        if(custom_thumbnail) {
                            current_operation='moderation';
                            custom_thumbnail = 0;
                            //xGetElementById('loader').innerHTML = '<blink>Your video is successfully added to the moderation queue. Now uploading thumbnail of the video, please wait...</blink>';
                            groups.notifier.show('success','Your video is successfully added to the moderation queue. Now uploading thumbnail of the video, please wait...');
                            xGetElementById('video_on_groups').value = 'http://LoLcodex.com/videos/'+video[2];
                            document.tmb_uploader.submit();
                        } else {
                            var txt = video[1];
                            popup_ajax('<h1>Share Video</h1>'+txt);
                            //groups.RenderController.showModal
                        }
                    }
                }

                function uploadThumbnailResult(msg,success) {
                    //alert('HOP THUMBNAIL LOADED MSG '+msg+'Success'+success);
                    //xGetElementById('loader').innerHTML = '<blink>Loading...</blink>';
                    if(success=='1') {
                        if(current_operation=='moderation') {
                            //window.location.href = 'http://LoLcodex.com/videos';
                            groups.notifier.show('success','Your video thumbnail has been uploaded successfully.');
                        }
                        else {
                            window.location.href = msg;
                        }
                    }
                    else {

                        var txt = '';

                        if(current_operation!='edit'&&current_operation!='moderation') {
                            txt += '<h1>Share Video</h1>';
                            txt += '<div class="info">Your video has been shared but the thumbnail could not be uploaded. ';
                        }
                        else if(current_operation=='moderation') {
                            txt += '<h1>Share Video</h1>';
                            txt += '<div class="info">Your video has been added to the moderation queue but the thumbnail could not be uploaded. ';
                        }
                        else {
                            txt += '<h1>Edit Video</h1>';
                            txt += '<div class="info">Your video has been edited but the thumbnail could not be uploaded. ';
                        }

                        txt += msg + '</div>';
                        groups.RenderController.showModal(txt);
                    }
                }

                function selectVideo(video) {
                    groups.RenderController.renderPageBusy();
                    x_selectVideo(video,editVideo);
                }

                function editVideo(video) {
                    var id = video[0];
                    if(id>0) {
                        var title = video[1];
                        var tags = video[2];
                        var thumbnail = video[3];

                        var link = video[4];
                        oldTags = tags;
                        var txt = '<h1><span class="module_box_icon module_box_videos"></span>Edit Video</h1>';
                        txt += '<iframe style="display:none" id="thumbnail_upload_frame" name="thumbnail_upload_frame"></iframe>';
                        txt += '<form class="groupsForm" name="tmb_uploader" id="tmb_uploader" action="http://LoLcodex.com/includes/videos_thumbnail_uploader.php" ENCTYPE="multipart/form-data" method="post" target="thumbnail_upload_frame">';
                        txt += '<input type="hidden" name="group_name" id="group_name" value="LoLcodex" />';
                        txt += '<input type="hidden" name="video_on_groups" id="video_on_groups" value="'+link+'" />';
                        txt += '<input type="hidden" name="action" id="action" value="edit" />';
                        txt += '<div><input type="hidden" id="id" value="'+id+'"/></div>';
                        txt += '<label class="formTitle">Video Title:</label><div><input required="1" type="text" id="title" value="'+title+'" onfocus="inputfocus(this)" onblur="inputblur(this)" /></div>';
                        txt += ''+tags+'';
                        if(thumbnail!='') {
                            txt += '<div><img src="'+thumbnail+'"/></div>';
                        }
                        txt += '<label class="formTitle">Thumbnail:</label><div><input type="file" name="thumbnail" id="thumbnail" value="'+thumbnail+'"/></div>';
                        txt += '<div class="module_box_button_container"><input type="button" class="cancel_button" value="Cancel" onclick="groups.RenderController.hideModal()" /><input type="button" value="Submit" onclick="editVideoSubmit(this.form)" /></div></form>';
                        groups.RenderController.showModal(txt);
                    } else {
                        groups.RenderController.hideModal();
                        alert("Temporary error! Please try again later...");
                    }
                }

                function editVideoSubmit(formobj) {
                    current_operation = 'edit';
                    if(!validateCompleteForm(formobj,'error')) return false;
                    var id = xGetElementById('id').value;
                    var title = xGetElementById('title').value;
                    var newTags = xGetElementById('tags').value;
                    var thumbnail = xGetElementById('thumbnail').value;
                    if(thumbnail!='')
                        custom_thumbnail = 1;
                    groups.RenderController.renderPageBusy();
                    x_editVideo(id,title,oldTags,newTags,editVideoResult);
                }

                function editVideoResult(res) {
                    if(!res[0]) {
                        groups.RenderController.hideModal();
                        alert(res[1]);
                    } else {
                        if(!custom_thumbnail) {
                            window.location.href = res[1];
                        }
                        else {
                            groups.notifier.show('success','You have successfully edited the video. Now uploading new thumbnail of the video, please wait...');
                            custom_thumbnail = 0;
                            document.tmb_uploader.submit();
                        }
                    }
                }

                function deleteVideo(id) {
                    var confirmDelete = confirm('Are you sure you want to delete the video and all of the comments and tags of it?');
                    if(confirmDelete)
                    {
                        groups.RenderController.renderPageBusy();
                        x_deleteVideo(id,deleteVideoResult);
                    }
                }

                function deleteVideoResult(res) {
                    if(!res[0]) {
                        groups.RenderController.hideModal();
                        alert(res[1]);
                    } else {
                        window.location.href = res[1];
                    }
                }



                function lastvideos() {

                }

                var initial_comment_value = 1;
                function empty_comment(obj) {
                    if(initial_comment_value==1) {
                        obj.value="";
                        initial_comment_value = 0;
                    }
                }

                function addVideosComment(id,formobj) {
                    if(!validateCompleteForm(formobj,'error')) return false;
                    groups.RenderController.renderPageBusy();
                    var comment = xGetElementById('videos_comment').value;
                    x_video_addComment(id,comment,addVideosCommentResult);
                }

                function addVideosCommentResult(res) {
                    if(!res[0]) {
                        alert('Failure: '+res[1]);
                        groups.RenderController.hideModal();
                    } else {
                        groups.RenderController.hideModal();
                        alert("Your comment has been added!");
                    }
                }

                function deleteVideosComment(id,page_id) {
                    var confirmDelete = confirm('Are you sure you want to delete the comment?');
                    if(confirmDelete) {
                        groups.RenderController.renderPageBusy();
                        x_video_deleteComment(id,page_id,deleteVideosCommentResult);
                    }
                }

                function deleteVideosCommentResult(res) {
                    groups.RenderController.hideModal();
                    if(!res[0]) {
                        alert(res[1]);
                    } else {
                        alert("The comment has been deleted!");
                    }
                }

                // TINYPIC PLUGIN
                var plugin_id = Math.floor(Math.random()*1000000);

                function getParameter(queryString, parameterName) {
                    var parameterName = parameterName + "=";
                    if(queryString.length > 0) {
                        begin = queryString.indexOf(parameterName);
                        if(begin != -1) {
                            begin += parameterName.length;
                            end = queryString.indexOf("&", begin);
                            if(end == -1) {
                                end = queryString.length;
                            }
                            return unescape(queryString.substring(begin, end));
                        }
                        return "";
                    }
                }

                function showTinypicPlugin(){
                    var el = document.getElementById('tinypic_plugin_'+plugin_id);
                    el.style.display = '';
                    if (el.src != '')
                    {
                        return;
                    }
                    var w = 260;
                    var h = 246;
                    curl = '';
                    ctxt = '';

                    tinypic_layout = 'narrow';
                    tinypic_type = 'videos';
                    tinypic_links = 'html';
                    tinypic_language = 'en';
                    tinypic_search = 'false';
                    tinypic_callback_url = 'http%3A//com/tinypic_test.php';
                    tinypic_callback_text = 'test';
                    if (typeof(tinypic_callback_url) != 'undefined')
                        curl = "|cu,"+tinypic_callback_url.replace(/\&/g, '%26');;
                    if (typeof(tinypic_callback_text) != 'undefined')
                        ctxt = "|ct,"+tinypic_callback_text.replace(/\&/g, '%26');;

                    el.setAttribute("height", h);
                    el.setAttribute("width", w);
                    el.setAttribute("scrolling", "no");

                    var tpurl = "http://plugin.tinypic.com/plugin/index.php?popts=l,"+tinypic_layout+"|t,"+tinypic_type+"|c,"+tinypic_links+"|i,"+tinypic_language+"|s,"+tinypic_search;
                    if (curl)
                        tpurl += curl;
                    if (ctxt)
                        tpurl += ctxt;
                    el.src = tpurl;
                }

                function uploadAlternative() {
                    groups.RenderController.showModal('<h1>Upload New Video</h1>Because of some glitches in the Amazon side, we implemented an alternative uploader. Upload your video via the plug-in, copy the embed code that plug-in showed. Then click <a href="javascript:shareFromAnywhere(true)">here</a> to share...<br /><br /><iframe id="tinypic_plugin_'+plugin_id+'" frameborder="0" style="display: none;" scrolling="no"></iframe><br/>');
                    showTinypicPlugin();
                }
                function click_point_up(videoID) {
                    groups.RenderController.renderPageBusy();
                    x_videos_pointUp(videoID,click_point_up_res);
                }

                function click_point_down(videoID) {
                    groups.RenderController.renderPageBusy();
                    x_videos_pointDown(videoID,click_point_down_res);
                }


                function click_point_up_res(res) {

                    if(res[0]) {
                        videoID = parseInt(res[1]);
                        point = parseInt(document.getElementById('video_point_1').innerHTML);
                        swapContent('video_point_1',800,point + 1);
                        document.getElementById('rate_content').innerHTML = '<a href="javascript:void(click_point_down('+videoID+'))" ><img align="absbottom" src="http://com/images/fugue/star-small.png">Liked</a>';
                        groups.RenderController.hideModal();
                    }
                    else {
                        groups.RenderController.hideModal();
                    }
                }


                function click_point_down_res(res) {

                    if(res[0]) {
                        videoID = parseInt(res[1]);
                        point = parseInt(document.getElementById('video_point_1').innerHTML);
                        swapContent('video_point_1',800,point - 1);
                        document.getElementById('rate_content').innerHTML = '<a href="javascript:void(click_point_up('+videoID+'))" ><img align="absbottom" src="http://com/images/fugue/star-small-empty.png">Like</a>';
                        groups.RenderController.hideModal();
                    }
                    else {
                        groups.RenderController.hideModal();
                    }

                }


                /*function to run onload*/
                groups.platform_ready = function(){
        
                };

                groups.initialGraphData                 = "";
                groups.initialGraphLabels               = "";
                groups.initialGraphTooltips             = "";
                groups.initialGraphTopValue             = "";
                groups.initialGraphProgress2            = "";
                groups.initialGraphAvailableDisc        = "";
                groups.initialGraphReadableDisc         = "";
                groups.initialGraphPieValues            = "";
                groups.initialGraphPieSlides            = "";


                groups.shouldShowLove = '';

                /*--------------*/
            </script>


            <script type="text/javascript" rel="compressed" charset="utf-8" src="/public/js/min.grouppage.js?b=1359739035"></script>

            <script type="text/javascript" src="http://s.skimresources.com/js/6948X660046.skimlinks.js"></script>
            <!-- footer scripts end --></body>
</html>