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
        <title>Default Album | Photos | LoLcodex</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
        <meta name="Keywords" content=",Photos,Default Album">
        <meta name="Description" content="Private social network">
        <meta name="Generator" content="com 2.0">
        <meta name="Robots" content="index">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/style.css" id="groups_template_style">
        <link rel="stylesheet" type="text/css" href="../css/general.css">
        <link rel="index" title="LoLcodex" href="http://LoLcodex.com">
        <link rel="alternate" type="application/rss+xml" title="RSS" href="http://com/rss/LoLcodex/photos">
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
        <style>
            #navThumbs
            {
                overflow: hidden;
                height: 100px;
                padding: 40px 0;
            }
            img.navArrow
            {
                display: block;
                margin: 10px auto;
                cursor: pointer;
            }
            #navThumbs a
            {
                display: block;
                overflow: hidden;
                text-align: center;
                margin: 5px auto;
                width: 100px;
            }
            #navThumbs a img
            {
                border: none;
            }
        </style><link rel="stylesheet" type="text/css" href="/public/css/groups/groups.util.scroller.css" /><link rel="alternate" type="application/rss+xml" title="Grou.p Photos" href="http://com/rss/LoLcodex/photos" /><link rel="stylesheet" href="/public/css/lightbox/lightbox.css" type="text/css" media="screen" /><link rel="stylesheet" href="/public/css/groups/groups.module.photos.css" type="text/css" media="screen" />
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
        <div id="layout" class="module_photos album">
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
                        <div id="top_block_no_1"  ><div class="box"><div class="box_top" id="block_title_no_1"><h2><div id="block_title_sub_menu" class="menu_list"></div>Default Album</h2></div><div style="clear:both"></div><div class="box_mid"><div class="content" id="block_no_1">

                                        <div itemscope itemtype="schema.org/ImageObject">

                                            <style>
                                                #status_form { overflow: hidden; }
                                                #newsfeed_filters { display: none; }
                                            </style>
                                            <div id="newsfeed">
                                                <div id="oopsOverlay"></div>
                                                <div id="emptyContent">
                                                    <div class="emptyModuleIcon" style="background-position: -1920px 0;;"></div>
                                                    <div class="emptyModuleText">

                                                        <h3>Welcome to your screenshot gallery. <br> No pictures have been added yet.</h3><p>Why not get the photo-sharing started by adding a new League of Legends screenshot?</p><ul id="emptyActions"><li><a class="emptyAddIcon" href="javascript:addPhoto('0')">Add a Screenshot</a></li></ul></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                    </div>
                    <div class="col_side" id="col_sidebar">
                        <div id="top_block_no_2"  >	<div class="box_mid_ops_button_cont"><button onclick="addPhoto(0)" class="box_mid_ops_button"><div class="content_plus"> </div><div class="app_icon app_photos"> </div> Add Screenshot </button></div><iframe style="display:none" width="0" height="0" frameborder="0"scrolling="no" marginwidth="0" marginheigh="0"id="upload_frame"  name="upload_frame"></iframe>
                            <input type="hidden" id="group_flickr_account" value="11271501@N00" />

                        </div>
                        <div id="hidden_block_3"  style="display:none"  ><div class="box"><div style="clear:both"></div><div class="box_mid box_mid_sidebar_ie_width_fix"><div class="content" id="block_no_3">	<form action="http://LoLcodex.com/photos/album/0/1" id="sorterform" method="POST">
                                            <input type="hidden" name="sort_by" id="sorterselect" />
                                            <input type="submit" name="sort_submit" value="Reload" />
                                        </form>
                                        <script language="JavaScript">
                                            function sortBy(w) {
                                                document.getElementById('sorterselect').value = w;
                                                document.getElementById('sorterform').submit();
                                            }
                                        </script></div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                        <div id="top_block_no_2078072"  class="movable" ><div class="box"><div class="box_top" id="block_title_no_4"><h2>Did you know?</h2></div><div style="clear:both"></div><div class="box_mid box_mid_sidebar_ie_width_fix"><div class="content" id="block_no_2078072"><div class="adviseBlock">That you can share Photos and Videos with your group via email? <br><br> Simply email your photos and videos as attachments to <b><a href="mailto:share@LoLcodex.com">share@LoLcodex.com</a></b> and your photos and videos will be published to your group.</div></div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                        <div id="top_block_no_2078076"  class="movable" ><div class="box"><div class="box_top" id="block_title_no_4"><h2>Share</h2></div><div style="clear:both"></div><div class="box_mid box_mid_sidebar_ie_width_fix"><div class="content" id="block_no_2078076"><script type="text/javascript" src="/gw.php?group_name=LoLcodex&width=165px&fontfam=arial, helvetica, sans-serif&fontsize=11&bkgcolor=f1f1f1&text_color=666&border_color=a4a4a4&gw_m_people=1&gw_m_people_amount=8&gw_m_blogs=0&gw_m_blogs_amount=3&gw_m_talks=0&gw_m_talks_amount=3&gw_m_photos=1&gw_m_photos_amount=3&gw_m_links=0&gw_m_links_amount=3&gw_m_wiki=0&gw_m_wiki_amount=3&gw_m_calendar=0&gw_m_calendar_amount=0&gw_m_groups=0&gw_m_groups_amount=0&gw_m_videos=0&gw_m_videos_amount=0&gw_m_files=0&gw_m_files_amount=0&gw_m_latest=0&gw_m_latest_amount=3&love_groups=0"></script></div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
                        <div id="top_block_no_2078077"  class="movable" ><div class="box_mid box_mid_sidebar_ie_width_fix"><div class="content" id="block_no_2078077"><center></center></div></div></div><div class="box_bottom"><span class="box_bottom_right"></span><span class="box_bottom_left"></span></div></div>
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
            groups._info.obj1 = 'album';
            groups._info.userId = '13530230';
            groups._info.userName = 'oajiivhbldxbldhwi';
            groups._info.isMobile = '';
            groups._info.module.name = 'photos';
            groups._info.module.profileOwnerId = '';
            groups._info.wikiPageCategoryId = '';
            groups._info.wikiCategoryId = '';
            groups._info.previewImage = '';

    
            groups._info.module.designMode = !!window.hasPermission;

            /*--------------*/

            /*javascript_variables*/
    
            groups._info.groupId = 704597;
            groups._info.title = 'LoLcodex';
            groups._info.moduleTitle = 'Photos';
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
            window.applySajaxMethods = function(){['ExtraPages_addExtraPage','ExtraPages_getAddModulePanel','ExtraPages_get3rdAddModulePanel','ExtraPages_activateModules','ExtraBlocks_addBlock','ExtraBlocks_removeBlock','ExtraBlocks_selectBlock','ExtraBlocks_editBlock','ExtraBlocks_editBlockWithContentLimit','ExtraBlocks_savePageDesign','ExtraBlocks_getModulesListForModuleBox','getImageInfo','setNewGroupID','changePersonalFlickrAccount','pointUp','pointDown','addPhotoComment','xreloadPage','deletePhoto','deletePhotoComment','setCaption','getCaption','photo_addTags','photo_selectTags','photo_editTags','photo_addAction','photos_addAction','createAlbum','getAlbumsForEditPanel','selectAlbum','editAlbum','deleteAlbum','getPhotoInformation','editPhotoInformation','makeProfilePic','deleteAction','saveStatusMessage','getMemberActions','addTwitterAssociation','reportIssue','facebookconnect_signup','zendSupport','sendSupportTicket','facebookconnect_control','updateEntrySimple','pollVote','dont_show_change_layout','ExtraBlocks_getModulesListForModuleBox','getModulesListForModuleBox','ExtraBlocks_addBlock'].each(function(f){window["x_"+f]=function(){return _S(f, Array.prototype.slice.apply(arguments));};});};

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

            var PHOTOS_LIMIT_EXCEEDED = false;function set_unique() {
                id = xGetElementById('group_flickr_account').value;
                text = '<h1>Switch to Group Based Flickr Account</h1><form class="groupsForm"onsubmit="return false">';
                text += '<label class="formTitle">Flickr Group ID:</label>';
                if(id!='11271501@N00')		 text += '<div><input onfocus="inputfocus(this)" onblur="inputblur(this)" required="1" realname="Flickr Group ID" type="text" id="newgid" value="'+id+'" /></div><div class="FormSubText">Please enter group id, not the name.</div>';
                else		 text += '<div><input onfocus="inputfocus(this)" onblur="inputblur(this)" required="1" realname="Flickr Group ID" type="text" id="newgid" /></div><div class="FormSubText">Please enter group id, not the name.</div>';
                text += '<div><input type="button" value="Submit" onclick="javascript:void(set_new_gid(this.form))" />';
                text += '<input type="button" class="cancel_button" value="Cancel" onclick="javascript:void(groups.RenderController.hideModal())" /></div></form>';
                groups.RenderController.showModal(text);
            }
            function set_member_based() {
                groups.RenderController.renderPageBusy();
                x_setNewGroupID('',set_new_gid_res);
            }
            function set_new_gid(formobj) {
                newid = xGetElementById('newgid').value;
                groups.RenderController.renderPageBusy();
                x_setNewGroupID(newid,set_new_gid_res);
            }
            function set_new_gid_res(vom) {
                if(vom=='1') {
                    groups.RenderController.showModal('<h1>Flickr Account</h1>Success! <a href="javascript:void(window.location.href=location.href)">Click</a> to continue...');
                }
                else {
                    groups.RenderController.showModal('<h1>Flickr Account</h1>Failure! <a href="javascript:void(groups.RenderController.hideModal())">Click</a> to try again...');
                }
            }
            function set_personal_account(jid) {
                text = '<h1><span class="module_box_icon module_box_photos"></span>Set My Flickr Account</h1><form class="groupsForm" onsubmit="return false">';
                text += '<label class="formTitle">Flickr Account Username:</label>';
                text += '<div><input onfocus="inputfocus(this)" onblur="inputblur(this)" required="1" realname="Flickr Username" type="text" id="flickr_username"/></div>';
                text += '<div class="module_box_button_container"><input type="button" class="cancel_button" value="Cancel" onclick="javascript:void(groups.RenderController.hideModal())" />';
                text += '<input type="button" value="Submit" onclick="javascript:void(set_new_pacc(this.form,'+jid+'))" /></div></form>';
                groups.RenderController.showModal(text);
            }
            function set_new_pacc(formobj,hid) {
                newun = xGetElementById('flickr_username').value;
                groups.RenderController.renderPageBusy();
                x_changePersonalFlickrAccount(hid,newun,set_new_gid_res);
            }

            function picShow(obj,num) {
                var newdiv = document.createElement('input');
                newdiv.setAttribute('id','thefile_'+num);
                newdiv.setAttribute('type','file');
                newdiv.setAttribute('name','thefile[]');
                xGetElementById('xxpicture_'+num).appendChild(newdiv);
                if(num<5) {
                    var newerdiv = document.createElement('a');
                    newerdiv.setAttribute('href','javascript:void(picShow(this,'+(num+1)+'))');
                    newerdiv.appendChild(document.createTextNode(" more?"));
                    xGetElementById('xxpicture_'+num).appendChild(newerdiv);
                }
                xDisplay(obj,'none');
                xDisplay('xxpicture_'+num,'block');

            }
            var picNum = 1;
            var maxPicNum = 5;
            function addPhoto(album) {
                if(PHOTOS_LIMIT_EXCEEDED) { var txt = '<h1><span class="module_box_icon module_box_photos"></span>Add Photo</h1><div class="info">The group has exceeded the storage limit. <a href="javascript:groups.RenderController.hideModal()">Click</a> to continue...</div>';groups.RenderController.showModal(txt);} else {/*groups.RenderController.showModal('<h1><span class="module_box_icon module_box_photos"></span>Add Photo</h1>Maintenance: Adding photo is temporarily disabled.);return;*/	 if(picNum != 1) picNum=1;
                    var txt = '<h1><span class="module_box_icon module_box_photos"></span>Add Photo</h1>';
                    txt += '<form class="groupsForm" id="img_uploader" action="http://LoLcodex.com/includes/picture_uploader_multiple.php" ENCTYPE="multipart/form-data" method="post" target="upload_frame">'
                    txt += '<br />';
                    txt += '<input type="hidden" name="groupname" value="LoLcodex" />';
                    txt += '<input type="hidden" name="groupnameX" value="m:pV___________^__________bolu__________^__________gy|8" />';
                    txt += '<div id="pic_forms"><div id="pic_form1"><label class="formTitle">Photo:</label><div><input required="1" type="file" id="pic_1" name="thefile[]" /></div><label class="formTitle">Caption:</label><div><input type="text" id="cap_1" name="caption[]"></div><label class="formTitle">Tags:</label><div><input type="text" id="tag_1" name="tags[]"></div><div class="FormSubText">Separate by comma</div>';
                    for(var i=2;i<=maxPicNum;i++)
                        txt += '<div id="pic_form'+i+'" style="display:none;"></div>';
                    txt += '<div id="more"><a href="javascript:more()">Add Another?</a></div></div>';txt += '<input type="hidden" name="album" id="album" value="0" />';					txt += '<div>';
                    txt += '<input type="checkbox" name="notify_members" id="notify_members" value="1" onclick="javascript:toggleNotificationFlag(this);" />';
                    txt += '<label for="notify_members"> Notify Members via Email</label>';
                    txt += '</div>';	 txt += '<div class="module_box_button_container"><input class="cancel_button" type="button" value="Cancel" id="cancel_upload_group_photo_btn" /><input type="button" id="upload_group_photo_btn" value="Upload" /></div>';
                    txt += '</form>';
                    groups.RenderController.showModal(txt);
                    xGetElementById('album').selected = 'selected';}
            }
            function more() {
                if(picNum<maxPicNum) {
                    picNum++;
                    var div = document.getElementById('pic_form'+picNum);
                    div.style.display = 'block';
                    var newDiv = '<hr /><label class="formTitle">Photo '+picNum+':</label><div><input required="1" type="file" id="pic_'+picNum+'" name="thefile[]" /></div>';
                    newDiv += '<label class="formTitle">Caption:</label><div><input type="text" id="cap_'+picNum+'" name="caption[]"></div><label class="formTitle">Tags:</label><div><input type="text" id="tag_'+picNum+'" name="tags[]"></div><div class="FormSubText">Separate by comma</div>';
                    div.innerHTML = newDiv;
                    if(picNum==maxPicNum) {
                        var more = document.getElementById('more');
                        more.innerHTML = '';
                    }
                }
            }

            function toggleNotificationFlag(element) {
                element.value = (element.value == 1) ? 0 : 1;
            }
            function addPhotoSubmit(formobj) {
                // if(!validateCompleteForm(formobj,'error')) return false;

                var shareOnFacebook = document.getElementById('share_on_facebook');
                groups.RenderController.renderPageBusy();         if( !shareOnFacebook ) {
                    xGetElementById('img_uploader').submit();
                } else {
                    if(shareOnFacebook.checked) {
                        xGetElementById('img_uploader').submit();
                    } else {
                        xGetElementById('img_uploader').submit();
                    }
                }	}

            function addPhotoSubmitRes(nnresult, uploaded) {
                var txt = "<h1><span class=\"module_box_icon module_box_photos\"></span>Add Photo</h1>";

                if(uploaded>0) {
                    txt += uploaded+ " image(s) successfully uploaded!<br/><br />";
                }
                if(nnresult==4) {
                    txt += 'Some image(s) could not be uploaded successfully! <a href="javascript:void(window.location.assign(location.href))">Click</a> to continue.';
                }
                else if(nnresult==3) {
                    txt += 'Some image(s) could not be uploaded successfully! Image too big.. <a href="javascript:void(window.location.assign(location.href))">Click</a> to continue.';
                }
                else if(nnresult==2) {
                    txt += 'Some image(s) could not be uploaded successfully! Image too small, it should be 100x100 px or bigger.. <a href="javascript:void(window.location.assign(location.href))">Click</a> to continue.';
                }
                else if(nnresult==1) {
                    txt += 'Some image(s) could not be uploaded successfully! Image type not valid.. <a href="javascript:void(window.location.assign(location.href))">Click</a> to continue.';
                }
                else if(nnresult==0) {
                    txt += 'Need to upload more? <a href="javascript:void(addPhoto(0))">Click here</a>, or <a href="javascript:void(window.location.assign(location.href))">continue</a> browsing...';
                }
                groups.RenderController.showModal(txt);
            }
            function addPhotoMultiSubmitRes(msg,moderated) {
                var text = '';
		
                if(moderated)
                    text = '<i>Your photo(s) are waiting for moderation...</i><br />';
                groups.RenderController.showModal("<h1><span class=\"module_box_icon module_box_photos\"></span>Add Photo</h1>"+text+msg);
            }
            function select_point_up(pid) {

                if(isPointChangeable(pid)) {
                    xGetElementById('point_up_'+pid).src = 'http://com/images/thumb_up_selected.gif';
                    //xGetElementById('point_down_'+pid).src = 'http://com/images/thumb_down_unselected.gif';
                }
            }

            function select_point_down(pid) {

                if(isPointChangeable(pid)) {
                    xGetElementById('point_down_'+pid).src = 'http://com/images/thumb_down_selected.gif';
                    //xGetElementById('point_up_'+pid).src = 'http://com/images/thumb_up_unselected.gif';
                }

            }

            function point_normalize(pid) {

                if(isPointChangeable(pid)) {
                    xGetElementById('point_down_'+pid).src = 'http://com/images/thumb_down.gif';
                    xGetElementById('point_up_'+pid).src = 'http://com/images/thumb_up.gif';
                }

            }

            function point_member_warn() {alert('Only members can vote');

            }

            var last_pid = -1;
            var last_link ='';
            function click_point_up(pid,purl) {

                //if(isPointChangeable(pid)) {
                last_link=purl;
                last_pid = pid;
                groups.RenderController.renderPageBusy();
                x_pointUp(purl,click_point_up_res);
                //}

            }

            function click_point_down(pid,purl) {

                //if(isPointChangeable(pid)) {
                last_link=purl;
                last_pid = pid;
                groups.RenderController.renderPageBusy();
                x_pointDown(purl,click_point_down_res);
                //}

            }


            function click_point_up_res(res) {

                if(res!='problem') {
                    swapContent('photo_point_1',800,res);
                    xGetElementById('rate_content').innerHTML = '<a href="javascript:void(click_point_down(\''+last_pid+'\',\''+last_link+'\'))" ><img align="absbottom" src="http://com/images/fugue/star-small.png">Liked</a>';
                    groups.RenderController.hideModal();
                }
                else {

                    groups.RenderController.hideModal();
                }

            }


            function click_point_down_res(res) {

                if(res!='problem') {
                    swapContent('photo_point_1',800,res);
                    xGetElementById('rate_content').innerHTML = '<a href="javascript:void(click_point_up(\''+last_pid+'\',\''+last_link+'\'))" ><img align="absbottom" src="http://com/images/fugue/star-small-empty.png">Like</a>';
                    groups.RenderController.hideModal();
                }
                else {

                    groups.RenderController.hideModal();
                }

            }


            function isPointChangeable(pid) {

                var q1 = xGetElementById('point_down_'+pid).src == 'http://com/images/thumb_down_unselected.gif';
                var q2 = xGetElementById('point_up_'+pid).src == 'http://com/images/thumb_up_unselected.gif';

                if(q1||q2) {
                    return false;
                }
                else {
                    return true;
                }
            }


            function show_photo_comments(purl) {
                window.location.href = 'http://com/LoLcodex/photos/' + urlencode(base64_encode(purl));
            }

            var initial_comment_value = 1;
            function empty_comment(obj) {
                if(initial_comment_value==1) {
                    obj.value="";
                    initial_comment_value = 0;
                }
            }

            function addPhotosComment(id,formobj) {
                if(!validateCompleteForm(formobj,'error'))
                    return false;

                var comment = xGetElementById('photos_comment').value;

                comment_def = 'Be the first to write something about this photo...';
                comment_def_2 = 'Write something about this photo...';
                if(comment=='' || comment==comment_def || comment==comment_def_2) {
                    alert('Comment field must be filled...');
                    xGetElementById('comment').focus();
                    return false;
                }

                groups.RenderController.renderPageBusy();

                x_addPhotoComment(id,comment,addPhotosCommentResult);

            }

            function addPhotosCommentResult(res) {
                if(!res) {
                    alert('An error occured! Please try again...');
                } else {
                    window.location.href = location.href;
                }
            }


            var _addphotopurl = '';

            function add_photo_comment(purl) {

                var txt = '';

                _addphotopurl = purl;
                txt += 'Your Comments About The Picture';
                txt += '<br /><br />';
                txt += '<form>';
                txt += '<textarea style="width: 250px;height: 200px;" required="1" realname="Comment" onfocus="inputfocus(this)" onblur="inputblur(this)" id="pzcomment"></textarea>';
                txt += '<br /><br />';txt += '<input type="button" value="Submit" onclick="submit_photo_comment(this.form,\''+purl+'\')" /> <input class="cancel_button" type="button" value="Cancel" onclick="groups.RenderController.hideModal()" />';

                txt += '</form>';

                groups.RenderController.showModal(txt);
            }

            function submit_photo_comment(formobj,purl) {

                /*if(!validateCompleteForm(formobj,'error'))
                        return false;*/

                var comment = xGetElementById('pzcomment').value;
                comment_def = 'Be the first to write something about this photo...';
                comment_def_2 = 'Write something about this photo...';
                if(comment=='' || comment==comment_def || comment==comment_def_2) {
                    alert('Comment field must be filled...');
                    xGetElementById('comment').focus();
                    return false;
                }


                groups.RenderController.renderPageBusy();

                x_addPhotoComment(purl,comment,submit_photo_comment_res);

            }

            function submit_photo_comment_res(res) {

                if(res=='0') {groups.RenderController.showModal('There was an error! <a href="javascript:void(add_photo_comment(\''+_addphotopurl+'\'))">Click</a> to try again...');
                } 
                else { 
                    window.location.href = location.href;
                }

            }



            function jreloadPage() {

                var user = xGetElementById('user').value;
                var sort = xGetElementById('sort').value;
                var page = xGetElementById('page').value;

                groups.RenderController.renderPageBusy();

                x_xreloadPage(user,sort,page,reloadPageRes);

            }


            function reloadPageRes(res) {


                xInnerHtml('block_no_1',res);
                //Tooltip.setup();
                groups.RenderController.hideModal();

            }



            function delete_comment(eid) {

                var txt = "Do you really want to remove this comment?";
                if(confirm(txt)) {
                    groups.RenderController.renderPageBusy();
                    x_deletePhotoComment(eid,deletecomment_res);
                }

            }

            function deletecomment_res(res) {

                if(res=='1') {
                    window.location.href = location.href;
                }
                else {
                    groups.RenderController.showModal('Error! <a href=\"javascript:void(groups.RenderController.hideModal())\">Click</a> to try again...');
                }
            }

            function delete_photo(link,user) {
                var txt = "<h1><span class=\"module_box_icon module_box_photos\"></span>Delete Photo</h1><div class=\"info\">Do you really want to delete this photo?</div>";txt += "<input type=\"button\" value=\"Yes\" onclick=\"delete_photo_sure('"+link+"','"+user+"')\" /> <input type=\"button\" value=\"No\" onclick=\"groups.RenderController.hideModal()\" />";	groups.RenderController.showModal(txt);


            }

            function delete_photo_sure(link,user) {

                groups.RenderController.renderPageBusy();

                x_deletePhoto(link,user,delete_photo_res);
            }

            function delete_photo_res(res) {
                //alert('DELETE FOTO RES '+res);
                if(res=='1') {
                    groups.warnOnLeave = -1;
                    window.location.href = 'http://com/LoLcodex/photos';

                }
                else {
                    alert('There was an error!');
                }
            }	function getPhotoInfo(id) {
                groups.RenderController.renderPageBusy();
                x_getPhotoInformation(id,editPhotoInfo);
            }

            function editPhotoInfo(res) {
                var txt = '<h1><span class="module_box_icon module_box_photos"></span>Edit Photo\'s Info</h1>';
                var status = res[0];
                if(!status) {
                    txt += res[1];
                } else {
                    var id = res[1];
                    var caption = res[2];
                    var tags = res[3];
                    var album_select_box = res[4];
                    var hidden_album = res[5];

                    txt += '<form onsubmit="return false" class="groupsForm" ><input type="hidden" id="photo_id" value="'+id+'" />';
                    txt += '<label class="formTitle">Caption</label>:<div><input type="text" id="photo_caption" value="'+caption+'" maxlength="255" /></div>';
                    txt += '<label class="formTitle">Tags</label>:<div><input type="text" id="photo_tags" value="'+tags+'" /></div>';

                    // if(hidden_album=='')
                    //	txt += '<label class="">Album</label>:<div>'+album_select_box+'</div>';
                    // else
                    txt += hidden_album;
                    txt += album_select_box;
                    txt += '<div class="module_box_button_container"><input class=\"cancel_button\" type="button" value="Cancel" onclick="groups.RenderController.hideModal()" /><input type="button" value="Submit" onclick="editPhotoInfoSubmit()" /></div>';
                    txt += '</form>';
                }
                groups.RenderController.showModal(txt);
            }

            function editPhotoInfoSubmit() {
                groups.RenderController.renderPageBusy();

                var id = xGetElementById('photo_id').value;
                var caption = xGetElementById('photo_caption').value;
                var tags = xGetElementById('photo_tags').value;
                var album = xGetElementById('album').value;

                x_editPhotoInformation(id,caption,tags,album,editPhotoInfoResult);
            }

            function editPhotoInfoResult(res) {
                groups.RenderController.renderPageIdle();
                var status = res[0];
                var msg = res[1];
                if(!status) {
                    groups.RenderController.showModal('<h1>Edit Photo\'s Info</h1>'+msg);
                } else {
                    window.location.href = location.href;
                }
            }
            var temp_photo_id = 0;

            function setCaption(id,caption) {
                x_setCaption(id,caption,setCaptionResult);
            }

            function setCaptionResult() {
                //Nothing
            }

            function getCaption(id) {
                groups.RenderController.renderPageBusy();
                temp_photo_id = id;
                x_getCaption(id,editCaption);
            }

            function editCaption(caption) {
                if(!caption)
                    caption = '';
                var id = temp_photo_id;
                temp_photo_id = 0;
                var txt = '<h1>Edit Caption</h1><form id="edit_caption" onsubmit="return false">';
                txt += '<input id="photo_id" type="hidden" value="'+id+'">';
                txt += 'Caption: <input id="photo_caption" type="text" value="'+caption+'" onblur="inputblur(this)" onfocus="inputfocus(this)"><br /><br />';
                txt += '<input type="button" onclick="editCaptionSubmit()" value="Edit">&nbsp;&nbsp;&nbsp;';
                txt += '<input class=\"cancel_button\" type="button" onclick="groups.RenderController.hideModal()" value="Cancel">';
                groups.RenderController.showModal(txt);
            }

            function editCaptionSubmit() {
                groups.RenderController.renderPageBusy();
                var id = xGetElementById('photo_id').value;
                var caption = xGetElementById('photo_caption').value;
                x_setCaption(id,caption,editCaptionResult);
            }

            function editCaptionResult(res) {
                if(!res)
                    alert('<h1>groups.i18n(\'Edit Caption\', {domain : \'general\'})</h1>groups.i18n(\'An error has occurred! Please\', {domain : \'general\'}) <a href="javascript:void(window.location.href=window.location.href)">groups.i18n(\'click to try again\', {domain : \'general\')</a>');
                else
                    window.location.href=window.location.href;
            }

            function addTags(id,string) {
                x_photo_addTags(id,string,addTagsResult);
            }

            function addTagsResult(res) {
                // Nothing
            }

            function selectTags(id) {
                groups.RenderController.renderPageBusy();
                x_photo_selectTags(id,editTags);
            }

            function editTags(res) {
                var id = res[0];
                var tags = res[1];
                oldTags = tags;

                var txt ='<h1>Edit Tags</h1><form onsubmit="return false">';
                txt += '<input type="hidden" id="id" value="'+id+'" />';
                txt += 'Tags: <input type="text" id="tag" value="'+tags+'" /> (Separate by comma)';
                txt += '<br /><br /><input type="button" onclick="editTagsSubmit()" value="Submit"> <input type="button" class=\"cancel_button\" onclick="groups.RenderController.hideModal()" value="Cancel">';
                txt += '</form>';

                groups.RenderController.showModal(txt);
            }
            function editTagsSubmit() {
                var id = xGetElementById('id').value;
                var newTags = xGetElementById('tag').value;
                groups.RenderController.renderPageBusy();
                x_photo_editTags(id,oldTags,newTags,editTagsResult);
            }
            function editTagsResult(res) {
                if(res)
                    window.location.assign(window.location.href);
                else
                    alert('<h1>Edit Tags</h1>You didn\'t do any changes. Please <a href="javascript:void(groups.RenderController.hideModal())">click to go back to the photo.</a>');
            }

            function addAction(count) {
                x_photo_addAction(count,addActionResult);
            }

            function addActionResult() {
                // Nothing
            }

            function makeProfilePic(profilePic)
            {
                groups.ajaxCall('makeProfilePic', [profilePic], 'Changing your profile picture...', function(res)
                {
                    if(res[0])
                    {
                        document.location = res[1];
                    }
                    else
                    {
                        window.location.refresh();
                    }
                });
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