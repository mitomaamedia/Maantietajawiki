<?php
# This file was automatically generated by the MediaWiki 1.35.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgEdititis = true;
$wgAllowDisplayTitle = true;
$wgAllowHTMLEmail = true;
$wgAllowUserCssPrefs = true;

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Maantietajawiki";
$wgMetaNamespace = "Maantietajawiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://wiki.maantietaja.org";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "$wgResourceBasePath/resources/assets/wiki.png" ];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "maantietaja@gmail.com";
$wgPasswordSender = "passwords@maantietaja.org";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "NO TPUBLIC";
$wgDBserver = "NOT PUBLIC";
$wgDBname = "NOT PUBLIC";
$wgDBuser = "NOT PUBLIC";
$wgDBpassword = "NOT PUBLIC";

# MySQL specific settings
$wgDBprefix = "NOT PUBLIC";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";
$wgShowExceptionDetails = true;
## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];
$wgSessionsInObjectCache = false;
$wgSessionCacheType = CACHE_DB;
## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "NOT PUBLIC";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "en_US.utf8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "fi";

$wgSecretKey = "NOT PUBLIC";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "NOT PUBLIC";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "not public";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# End of automatically generated settings.
# Add more configuration options below.
wfLoadExtension( 'GlobalPreferences' );
wfLoadExtension( 'Kartographer' );
$wgKartographerWikivoyageMode = true;
$wgKartographerMapServer = "https://maps.wikimedia.org";
$wgKartographerEnableMapFrame = true;
wfLoadExtension( 'JsonConfig' );
wfLoadExtension('VisualEditor');
$wgVisualEditorShowBetaWelcome = true;
$wgVisualEditorEnableDiffPage = true;
$wgVisualEditorPreferenceModules = true;
$wgVisualEditorEnableDiffPageBetaFeature = true;
$wgVisualEditorEnableBetaFeature = true;
$wgVisualEditorEnableVisualSectionEditing = true;
$wgVisualEditorEnableWikitextBetaFeature = true;
wfLoadExtension( 'CentralAuth' );
$wgCentralAuthDatabase = 'not public';
# General CentralAuth configuration
$wgGroupPermissions['trustworthy'] = $wgGroupPermissions['autoconfirmed'];
# Add the permissions from group "bot"
$wgGroupPermissions['trustworthy'] = array_merge(
    $wgGroupPermissions['trustworthy'],
    $wgGroupPermissions['bot']
    );
# Now modify these rights:
$wgGroupPermissions['trustworthy']['delete'] = true;
$wgGroupPermissions['trustworthy']['protect'] = true;
$wgGroupPermissions['trustworthy']['patrol'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGrantPermissions['basic']['ipblock-exempt'] = true;

$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä'] = $wgGroupPermissions['bot'];
# Add the permissions from group "bot"

# Now modify these rights:
$wgGroupPermissions['sysop']['renameuser'] = true;
$wgGroupPermissions['nimenvaihtaja']['renameuser'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-nimenvaihtaja']['renameuser'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['delete'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['block'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['patrol'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['editprotected'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['editsemiprotected'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['upload_by_url'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['bigdelete'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['blockemail'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['browsearchive'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['deletedhistory'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['deletedtext'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['deletelogentry'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['deleterevision'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['editcontentmodel'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['hideuser'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['pagelang'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['patrol'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['suppressionlog'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['undelete'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['autoconfirmed'] = true;
$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['autopatrol'] = true;

$wgGroupPermissions['järjestelmänlaajuinen-ylläpitäjä']['edit'] = true;
$wgGrantPermissions['järjestelmänlaajuinen-ylläpitäjä']['ipblock-exempt'] = true;
$wgGroupPermissions['palauttaja']['rollback'] = true;
$wgGroupPermissions['ylin-taho']['patrol'] = true;
$wgGroupPermissions['ylin-taho']['siteadmin'] = true;
$wgGroupPermissions['ylin-taho']['unwatchedpages'] = true;
$wgGroupPermissions['ylin-taho']['deletechangetags'] = true;
$wgGroupPermissions['ylin-taho']['undelete'] = true;
$wgGroupPermissions['ylin-taho']['unblockself'] = true;
$wgGroupPermissions['ylin-taho']['userrights-interwiki'] = true;
$wgGroupPermissions['ylin-taho']['editsitecss'] = true;
$wgGroupPermissions['ylin-taho']['editsitejs'] = true;
$wgGroupPermissions['ylin-taho']['editusercss'] = true;
$wgGroupPermissions['ylin-taho']['editsitejson'] = true;
$wgGroupPermissions['ylin-taho']['edituserjs'] = true;
$wgGroupPermissions['ylin-taho']['edituserjson'] = true;
$wgGroupPermissions['ylin-taho']['hideuser'] = true;
$wgGroupPermissions['ylin-taho']['markbotedits'] = true;
$wgGroupPermissions['ylin-taho']['mergehistory'] = true;
$wgGroupPermissions['ylin-taho']['protect'] = true;
$wgGroupPermissions['ylin-taho']['rollback'] = true;
$wgGroupPermissions['ylin-taho']['pagelang'] = true;
$wgGroupPermissions['ylin-taho']['patrolmarks'] = true;
$wgGroupPermissions['ylin-taho']['suppressionlog'] = true;
$wgGroupPermissions['ylin-taho']['importupload'] = true;
$wgGroupPermissions['ylin-taho']['userrights'] = true;
$wgGroupPermissions['ylin-taho']['import'] = true;
$wgGroupPermissions['ylin-taho']['bot'] = true;
$wgGroupPermissions['ylin-taho']['override-export-depth	'] = true;
$wgGroupPermissions['ylin-taho']['noratelimit'] = true;
$wgGroupPermissions['ylin-taho']['ipblock-exempt'] = true;
$wgGroupPermissions['ylin-taho']['nominornewtalk'] = true;
$wgGroupPermissions['ylin-taho']['suppressredirect'] = true;
$wgGroupPermissions['ylin-taho']['purge'] = true;
$wgGroupPermissions['ylin-taho']['writeapi'] = true;
$wgGroupPermissions['ylin-taho']['bureaucrat'] = true;
$wgGroupPermissions['ylin-taho']['apihighlimits'] = true;
$wgGroupPermissions['ylin-taho']['interface-admin'] = true;
$wgGroupPermissions['ylin-taho']['editinterface'] = true;
$wgGroupPermissions['ylin-taho']['deletedhistory'] = true;
$wgGroupPermissions['ylin-taho']['delete'] = true;
$wgGroupPermissions['ylin-taho']['deletedtext'] = true;
$wgGroupPermissions['ylin-taho']['editcontentmodel'] = true;
$wgGroupPermissions['ylin-taho']['deletelogentry'] = true;
$wgGroupPermissions['ylin-taho']['deleterevision'] = true;
$wgGroupPermissions['ylin-taho']['blockemail'] = true;
$wgGroupPermissions['ylin-taho']['block'] = true;
$wgGroupPermissions['ylin-taho']['reupload-shared'] = true;
$wgGroupPermissions['ylin-taho']['bigdelete'] = true;
$wgGroupPermissions['ylin-taho']['upload'] = true;
$wgGroupPermissions['ylin-taho']['sendemail'] = true;
$wgGroupPermissions['ylin-taho']['reupload-own	'] = true;
$wgGroupPermissions['ylin-taho']['reupload'] = true;
$wgGroupPermissions['ylin-taho']['upload_by_url'] = true;
$wgGroupPermissions['ylin-taho']['move-rootuserpages'] = true;
$wgGroupPermissions['ylin-taho']['movefile'] = true;
$wgGroupPermissions['ylin-taho']['move-subpages	'] = true;
$wgGroupPermissions['ylin-taho']['move-categorypages'] = true;
$wgGroupPermissions['ylin-taho']['editsemiprotected'] = true;
$wgGroupPermissions['ylin-taho']['editprotected'] = true;
$wgGroupPermissions['ylin-taho']['oversight'] = true;
$wgGroupPermissions['ylin-taho']['suppressrevision'] = true;
$wgGroupPermissions['ylin-taho']['import'] = true;
$wgGroupPermissions['ylin-taho']['massmessage'] = true;
$wgGlobalUserGroups = array(
    'bot-global',
    'rollback-global',
    'sysadmin',
    'sysop-global',
);
wfLoadExtension('GlobalUserPage');
$wgGlobalUserPageAPIUrl = 'http://wiki.maantietaja.org/api.php';
$wgGlobalUserPageDBname = 'not public';
$wgCentralAuthDatabase = 'not public';
$wgSharedDB     = 'not public'; // or whatever database you use for central data


// create projectmember-powers right
$wgAvailableRights[] = 'projectmember-powers';

// add projectmember-powers to the projectmember-group
$wgGroupPermissions['projectmember']['projectmember-powers'] = true;

// add projectmember-powers to the 'basic' grant so we can use our projectmember powers over an API request
$wgGrantPermissions['basic']['projectmember-powers'] = true;

wfLoadExtensions([
    'TextExtracts',
    'PageImages',
    'Popups'
]);
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsOptInDefaultState = '1';
$wgPopupsReferencePreviewsBetaFeature = true;
wfLoadExtension('FileExporter');
$wgFileExporterBetaFeature = true;
wfLoadExtension('Cite');
wfLoadExtension( 'Flow' );
$wgFlowEditorList = array( 'visualeditor', 'none' );
$wgFlowEnableOptInBetaFeature = true;
wfLoadExtension('DiscussionTools');
$wgDiscussionToolsBeta = true;
$wgLocaltimezone = "UTC";
$wgLocaltimezone = "Europe/Helsinki";
wfLoadExtension('FlaggedRevs');
wfLoadExtension('Linter');
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'AbuseFilter' );
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-detail'] = true;
$wgGroupPermissions['sysop']['abusefilter-view'] = true;
$wgGroupPermissions['sysop']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-privatedetails'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

$wgGroupPermissions['ylin-taho']['abusefilter-modify'] = true;
$wgGroupPermissions['ylin-taho']['abusefilter-log-detail'] = true;
$wgGroupPermissions['ylin-taho']['abusefilter-view'] = true;
$wgGroupPermissions['ylin-taho']['abusefilter-log'] = true;
$wgGroupPermissions['ylin-taho']['abusefilter-privatedetails'] = true;
$wgGroupPermissions['ylin-taho']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['ylin-taho']['abusefilter-revert'] = true;

$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-modify'] = true;
$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-log-detail'] = true;
$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-view'] = true;
$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-log'] = true;
$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-privatedetails'] = true;
$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['väärinkäyttösuodattimen-ylläpitäjä']['abusefilter-revert'] = true;
wfLoadExtension( 'Echo' );
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;
wfLoadExtension('CiteThisPage');
wfLoadExtension('NearbyPages');
wfLoadExtension('UploadWizard');
wfLoadExtension('TemplateData');
wfLoadExtension('TwoColConflict');
wfLoadExtension( 'MobileFrontend' );
$wgMFNearby = true;
 // Choose one of these and add chosen code to bottom of LocalSettings.php file:
 wfLoadSkin( 'MinervaNeue' );
 $wgMFDefaultSkinClass = 'SkinMinerva'; // use Minerva skin (You need to download and install it separately, otherwise you'll get an exception)
 wfLoadSkin( 'Vector' );
$wgMFNearbyEndpoint = 'https://en.m.wikipedia.org/w/api.php';
wfLoadExtension('GeoData');
wfLoadExtension('PdfHandler');
wfLoadExtension( 'TimedMediaHandler' );
$wgFFmpegLocation = '/usr/bin/ffmpeg'; // Most common ffmpeg path on Linux
$wgTmhEnableMp4Uploads = true;
$wgTmhUseBetaFeatures = true;
wfLoadExtension('MultimediaViewer');
$wgMediaViewerIsInBeta = true;
$wgMediaViewerEnableByDefault = true;
wfLoadExtension('CodeEditor');
wfLoadExtension('ConfirmEdit');
wfLoadExtension('Translate');
$wgGroupPermissions['kääntäjä']['translate'] = true;
$wgGroupPermissions['kääntäjä']['skipcaptcha'] = true; // Bug 34182: needed with ConfirmEdit
$wgTranslateDocumentationLanguageCode = 'qqq';

# Add this if you want to enable access to page translation
$wgGroupPermissions['sysop']['pagetranslation'] = true;
$wgGroupPermissions['ylin-taho']['pagetranslation'] = true;
$wgGroupPermissions['ylin-taho']['translate'] = true;
$wgGroupPermissions['ylin-taho']['translate-import'] = true;
$wgGroupPermissions['ylin-taho']['skipcaptcha'] = true;
$wgGroupPermissions['ylin-taho']['translate-manage'] = true;
$wgGroupPermissions['ylin-taho']['translate-messagereview'] = true;
$wgGroupPermissions['ylin-taho']['translate-proofr'] = true;
$wgGroupPermissions['ylin-taho']['translate-groupreview'] = true;


$wgGroupPermissions['käännösylläpitäjä']['pagetranslation'] = true;
$wgGroupPermissions['käännösylläpitäjä']['translate'] = true;
$wgGroupPermissions['käännösylläpitäjä']['translate-import'] = true;
$wgGroupPermissions['käännösylläpitäjä']['skipcaptcha'] = true;
$wgGroupPermissions['käännösylläpitäjä']['translate-manage'] = true;
$wgGroupPermissions['käännösylläpitäjä']['translate-messagereview'] = true;
$wgGroupPermissions['käännösylläpitäjä']['translate-proofr'] = true;
$wgGroupPermissions['käännösylläpitäjä']['translate-groupreview'] = true;
# Private api keys for machine translation services
#$wgTranslateTranslationServices['Apertium']['key'] = '';
wfLoadExtension('GuidedTour');
wfLoadExtension('Interwiki');
$wgGroupPermissions['ylin-taho']['interwiki'] = true;
$wgHideInterlanguageLinks = false;
$wgInterwikiMagic = true;
wfLoadExtension('CheckUser');
$wgGroupPermissions['ylin-taho']['checkuser'] = true;
$wgGroupPermissions['ylin-taho']['checkuser-log'] = true;
$wgGroupPermissions['ylin-taho']['investigate'] = true;
wfLoadExtension( 'CentralNotice' );
$wgNoticeProjects = array( 'maantietajawiki', 'testwikitoinen' );
$wgCentralNoticeGeoIPBackgroundLookupModule = 'ext.centralNotice.freegeoipLookup';

wfLoadExtension('InputBox');
wfLoadExtension('ImageMap');
wfLoadExtension('CategoryTree');
wfLoadExtension( 'RevisionSlider' );
wfLoadExtension('PdfHandler');
$wgPdfProcessor = 'gs';
$wgPdfPostProcessor = $wgImageMagickConvertCommand; // if defined via ImageMagick
// $wgPdfPostProcessor = 'convert'; // if not defined via ImageMagick
$wgPdfInfo = 'pdfinfo';
$wgPdftoText = 'pdftotext';
wfLoadExtension('mediawiki-extensions-Scribunto-master');
wfLoadExtension( 'Capiunto' );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension('EntitySchema');
wfLoadExtension('TitleBlacklist');
wfLoadExtension('LocalisationUpdate');
wfLoadExtension('UniversalLanguageSelector');
$wgULSCompactLanguageLinksBetaFeature = true;
wfLoadExtension('Gadgets');
wfLoadExtension('BetaFeatures');
wfLoadExtension('ReplaceText');
wfLoadExtension('AdvancedSearch');
wfLoadExtension('CirrusSearch');
wfLoadExtension('Elastica');
wfLoadExtension('MultimediaViewer');
wfLoadExtension('Nuke');
wfLoadExtension('Poem');
wfLoadExtension('WikiEditor');
$wgTmpDirectory = "/home/maantiet/tmp_ogmqcl";
$wgShowSQLErrors = true;
$wgShowDBErrorBacktrace = true;
$wgDebugDumpSql = true;
$wgShowExceptionDetails = true;

$wgCookieSecure = false; 
$wgWatchlistExpiry = true;
$wgInterlanguageLinkCodeMap = true;
$wgAllowUserCss = true;
$wgAllowUserJs = true;
$wgHiddenPrefs = true;
$wgSearchMatchRedirectPreference = true;
$wgPasswordSender     = "passwords@maantietaja.org";
$wgPasswordSenderName = "Maantietäjäwikin ylläpito";
$wgEmergencyContact = false;
