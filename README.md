# SugarmCRM Integromat API Platform

## How to register a custom platform

### Requirements
- SugarCRM v7.9+/8+

### Installation
1. Download the `integromat-api-platform.zip` from the `/releases` directory in this repostory or in the Releases section of this repository.
2. In your browser, navigate to your local Sugar instance.
3. Login as an administrator. You may be prompted to create a user profile if this is the first time you’ve logged in with this account.
4. In the upper-right corner, click the down arrow beside your profile picture and select Administration.
5. In the Developer Tools section, click Module Loader.
6. In the Modules section, upload the module loadable package you downloaded in the first step.
7. Click the Install button on the row for Integromat API Platform loadable package.
8. Click Commit to install the package.
9. When the package has finished installing, click Back to Module Loader. Integromat API Platform package will be listed as installed.

### Usage
SugarCRM changed its behavior out of the box to disallow unknown platforms in the Winter '18 (7.11) release. Therefore
any customizations or integrations which rely on a custom platform need to register those up front.

More information can be found
[here](http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_7.9/Architecture/Extensions/Platforms/), or
[here](https://community.sugarcrm.com/docs/DOC-5875-tutorial-how-to-register-custom-platforms-in-sugar-instances).
