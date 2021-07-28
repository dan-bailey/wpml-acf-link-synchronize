# wpml-acf-link-synchronize
Overcomes the gap in WPML where it overlooks the links in ACF fields.

# Longer Description
When running a Wordpress site that utilizes WPML, it offers a button to synchronize links across the translation languages, which is super useful and time-saving.  However, that functionality does not look at any links inside fields created in Advanced Custom Fields, which is a serious oversight.  This plugin attempts to resolve that issue by scanning ACF fields, looking at their translation language, and then scanning for URLs therein to update to the proper language/link combo.

# WARNING
This has only been tested on a dev site and one client's staging site.  I take no responsibility for it shitting the bed.  You will definitely want to back up your site before running this.
