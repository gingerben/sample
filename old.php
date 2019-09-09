Last login: Fri Aug 30 22:52:07 on ttys000
You have new mail.
➜  ~ cd Projects/mag-2-3-2
➜  mag-2-3-2 git:(bug-1255) ✗ compsoer update
zsh: command not found: compsoer
➜  mag-2-3-2 git:(bug-1255) ✗ composer update


  [Seld\JsonLint\ParsingException]
  "./composer.json" does not contain valid JSON
  Parse error on line 147:
  ...bluefoot": "*",    },    "autoload": {
  ---------------------^
  Expected: 'STRING' - It appears you have an extra trailing comma


➜  mag-2-3-2 git:(bug-1255) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - magento/product-enterprise-edition 2.3.2 requires magento/product-community-edition 2.3.2 -> satisfiable by magento/product-community-edition[2.3.2].
    - magento/product-enterprise-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - Installation request for magento/product-enterprise-edition 2.3.2 -> satisfiable by magento/product-enterprise-edition[2.3.2].

➜  mag-2-3-2 git:(bug-1255) ✗ git checkout master
M   composer.json
M   composer.lock
M   lib/web/jquery/jquery-ui.js
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) ✗ git stash
Saved working directory and index state WIP on master: 8e38254a Merge branch 'bug-1258' into develop
➜  mag-2-3-2 git:(master) git checkout master
Already on 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) git status
On branch master
Your branch is up to date with 'origin/master'.

nothing to commit, working tree clean
➜  mag-2-3-2 git:(master) git pull
Already up to date.
➜  mag-2-3-2 git:(master) git fetch
➜  mag-2-3-2 git:(master) git pull
Already up to date.
➜  mag-2-3-2 git:(master) git fetch -p
From github.com:paulsmithltd/paulsmith.com
 - [deleted]           (none)     -> origin/3.3.8-dev
 - [deleted]           (none)     -> origin/3.3.9-dev
 - [deleted]           (none)     -> origin/3.4.0-dev
 - [deleted]           (none)     -> origin/3.4.3-dev
 - [deleted]           (none)     -> origin/bug-1231
 - [deleted]           (none)     -> origin/feature-1060
 - [deleted]           (none)     -> origin/feature-1177-adyen-2.3.2
 - [deleted]           (none)     -> origin/feature-1213
 - [deleted]           (none)     -> origin/feature-342
 - [deleted]           (none)     -> origin/nish-2.3
➜  mag-2-3-2 git:(master) git checkout feature-1268
error: pathspec 'feature-1268' did not match any file(s) known to git.
➜  mag-2-3-2 git:(master) git checkout feature-1269
error: pathspec 'feature-1269' did not match any file(s) known to git.
➜  mag-2-3-2 git:(master) git checkout bug-1269
Branch 'bug-1269' set up to track remote branch 'bug-1269' from 'origin'.
Switched to a new branch 'bug-1269'
➜  mag-2-3-2 git:(bug-1269) git checkout develop
Switched to branch 'develop'
Your branch is behind 'origin/develop' by 1 commit, and can be fast-forwarded.
  (use "git pull" to update your local branch)
➜  mag-2-3-2 git:(develop) git pull
Updating 8e38254a..0e766d75
Fast-forward
 composer.json                                      |   8 +
pick b0ddd89 Create kill switch for Click & Reserve - #1264
Create kill switch for Click & Reserve - #1264
 composer.lock                                      | 399 +++++----------------
 ...OT_PULLING_THROUGH_GA_1263_2.3.2_COMPOSER.patch | 204 +++++++++++
 ...ANNOT_VIEW_OLD_ORDERS_1265_2_3_2_COMPOSER.patch |  22 ++
 ...N_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch |  25 ++
 ...UTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch |  38 ++
 ...SING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch |  32 ++
 7 files changed, 422 insertions(+), 306 deletions(-)
 create mode 100644 patches/anowave/PRODUCT_TITLE_NOT_PULLING_THROUGH_GA_1263_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-rma/CANNOT_VIEW_OLD_ORDERS_1265_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch
➜  mag-2-3-2 git:(develop) git fetch
➜  mag-2-3-2 git:(develop) cd vendor/paulsmithltd/magento2-theme-bicycle
➜  magento2-theme-bicycle git:(bug-1260) git checkout master
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  magento2-theme-bicycle git:(master) git checkout develop
error: pathspec 'develop' did not match any file(s) known to git.
➜  magento2-theme-bicycle git:(master) git fetch
t%                                                                                                                                                   ➜  magento2-theme-bicycle git:(master) git pull
Already up to date.
➜  magento2-theme-bicycle git:(master) git checkout origin develop
error: pathspec 'develop' did not match any file(s) known to git.
➜  magento2-theme-bicycle git:(master) git checkout origin/develop
Note: checking out 'origin/develop'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by performing another checkout.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -b with the checkout command again. Example:

  git checkout -b <new-branch-name>

HEAD is now at 99ec782 Logo should only be H1 on homepage #1219
➜  magento2-theme-bicycle git:(99ec782) git checkout -b develop
Switched to a new branch 'develop'
➜  magento2-theme-bicycle git:(develop) git reset --hard origin/master
HEAD is now at 7b9ca7a Merge branch 'feature-1172' of github.com:paulsmithltd/magento2-theme-bicycle into feature-1172
➜  magento2-theme-bicycle git:(develop) git push origin develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 607 bytes | 607.00 KiB/s, done.
Total 4 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 1 local object.
To github.com:paulsmithltd/magento2-theme-bicycle.git
   99ec782..d1d38f2  develop -> develop
➜  magento2-theme-bicycle git:(develop) cd ../magento2-click-reserve
➜  magento2-click-reserve git:(feature-1264) git rebase -i HEAD~2
[detached HEAD aacab05] Create kill switch for Click & Reserve - #1264
 Author: Janusz Lavrnja-Czapski <janusz.lavrnja-czapski@paulsmith.co.uk>
 Date: Thu Aug 29 12:09:20 2019 +0100
 4 files changed, 34 insertions(+), 15 deletions(-)
Successfully rebased and updated refs/heads/feature-1264.
➜  magento2-click-reserve git:(feature-1264) git push origin -f feature-1264
Counting objects: 14, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (12/12), done.
Writing objects: 100% (14/14), 1.44 KiB | 1.44 MiB/s, done.
Total 14 (delta 9), reused 0 (delta 0)
remote: Resolving deltas: 100% (9/9), completed with 9 local objects.
To github.com:paulsmithltd/magento2-click-reserve.git
 + c201993...aacab05 feature-1264 -> feature-1264 (forced update)
➜  magento2-click-reserve git:(feature-1264) git pull
Already up to date.
➜  magento2-click-reserve git:(feature-1264) git fetch
➜  magento2-click-reserve git:(feature-1264)
➜  magento2-click-reserve git:(develop) git push origin develop
Total 0 (delta 0), reused 0 (delta 0)
To github.com:paulsmithltd/magento2-click-reserve.git
   5947e6a..aacab05  develop -> develop
➜  magento2-click-reserve git:(develop) git pull
There is no tracking information for the current branch.
Please specify which branch you want to merge with.
See git-pull(1) for details.

    git pull <remote> <branch>

If you wish to set tracking information for this branch you can do so with:

    git branch --set-upstream-to=<remote>/<branch> develop

➜  magento2-click-reserve git:(develop) git fetch -p
➜  magento2-click-reserve git:(develop) cd ../../
➜  vendor git:(develop) ✗ cd ../
➜  mag-2-3-2 git:(develop) ✗ composer update
Gathering patches for root package.
Removing package magento/module-rma so that it can be re-installed and re-patched.
  - Removing magento/module-rma (101.1.2)
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 2 installs, 3 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating zendframework/zend-code (3.3.1 => 3.3.2): Downloading (100%)  - Updating paulsmithltd/magento2-click-reserve (v2.0.1 => dev-develop aacab05):  Checking out aacab05b24
  - Updating paulsmithltd/magento2-theme-bicycle (v5.0.0 => dev-develop d1d38f2):  Checking out d1d38f2cc5
  - Installing magento/module-sales (102.0.2): Downloading (100%)          - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)

  - Installing magento/module-rma (101.1.2): Downloading (100%)
  - Applying patches for magento/module-rma
    patches/module-rma/CANNOT_VIEW_OLD_ORDERS_1265_2_3_2_COMPOSER.patch (Cannot view old orders #1265)

magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.json
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) compsoer update
zsh: command not found: compsoer
➜  mag-2-3-2 git:(develop) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 2 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-return-forms (v2.0.0 => dev-develop 46bafdb):  Checking out 46bafdba7e
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (d1d38f2 => 011547a):  Checking out 011547add1
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git add composer.json
➜  mag-2-3-2 git:(develop) ✗ git commit -m "gift card"
[develop b026e0ea] gift card
 2 files changed, 21 insertions(+), 14 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 779 bytes | 779.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   b5e53ddc..b026e0ea  develop -> develop
➜  mag-2-3-2 git:(develop) mag2

     ___ ___                                       ___
 _ _/ _ ( _ )___ _ __  __ _ __ _ ___ _ _ _  _ _ _ |_  )
| ' \_, / _ \___| '  \/ _` / _` / -_) '_| || | ' \ / /
|_||_/_/\___/   |_|_|_\__,_\__, \___|_|  \_,_|_||_/___|
                           |___/
n98-magerun2 version 3.1.0 by netz98 GmbH

Usage:
  command [options] [arguments]

Options:
  -h, --help                                     Display this help message
  -q, --quiet                                    Do not output any message
  -V, --version                                  Display this application version
      --ansi                                     Force ANSI output
      --no-ansi                                  Disable ANSI output
  -n, --no-interaction                           Do not ask any interactive question
      --root-dir[=ROOT-DIR]                      Force magento root dir. No auto detection
      --skip-config                              Do not load any custom config.
      --skip-root-check                          Do not check if n98-magerun runs as root
      --skip-core-commands[=SKIP-CORE-COMMANDS]  Do not include Magento 2 core commands
  -v|vv|vvv, --verbose                           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  help                                        Displays help for a command
  install                                     Install magento
  list                                        Lists commands
  mysql-client                                Opens mysql client by database config from env.php
  open-browser                                Open current project in browser (experimental)
  script                                      Runs multiple n98-magerun commands
  self-update                                 Updates n98-magerun2.phar to the latest version.
  selfupdate                                  Updates n98-magerun2.phar to the latest version.
  shell                                       Runs n98-magerun as shell
 admin
  admin:notifications                         Toggles admin notifications
  admin:token:create                          Create a new token for an admin user.
  admin:user:change-password                  Changes the password of a adminhtml user.
  admin:user:create                           Creates an administrator
  admin:user:delete                           Delete the account of a adminhtml user.
  admin:user:list                             List admin users.
  admin:user:unlock                           Unlock Admin Account
 app
  app:config:dump                             Create dump of application
  app:config:import                           Import data from shared configuration files to appropriate data storage
  app:config:status                           Checks if config propagation requires update
 cache
  cache:clean                                 Clean magento cache
  cache:disable                               Disables Magento caches
  cache:enable                                Enables Magento caches
  cache:flush                                 Flush magento cache storage
  cache:list                                  Lists all magento caches
  cache:report                                View inside the cache
  cache:status                                Checks cache status
  cache:view                                  Prints a cache entry
 catalog
  catalog:images:resize                       Creates resized product images
  catalog:product:attributes:cleanup          Removes unused product attributes.
 config
  config:data:acl                             Prints acl.xml data as table
  config:data:di                              Dump dependency injection config
  config:sensitive:set                        Set sensitive configuration values
  config:set                                  Change system configuration
  config:show                                 Shows configuration value for given path. If path is not specified, all saved values will be shown
  config:store:delete                         Deletes a store config item
  config:store:get                            Get a store config item
  config:store:set                            Set a store config item
 cron
  cron:install                                Generates and installs crontab for current user
  cron:remove                                 Removes tasks from crontab
  cron:run                                    Runs jobs by schedule
 cronmanager
  cronmanager:killjob                         Kill cron jobs by code
  cronmanager:runjob                          Run a specific cron job by its job_code
  cronmanager:showjobs                        Show all cron job codes in Magento
 customer
  customer:change-password                    Changes the password of a customer.
  customer:create                             Creates a new customer/user for shop frontend.
  customer:hash:upgrade                       Upgrade customer's hash according to the latest algorithm
  customer:info                               Loads basic customer info by email address.
  customer:list                               Lists all magento customers
  customer:token:create                       Create a new token for a customer.
 db
  db:console                                  Opens mysql client by database config from env.php
  db:create                                   Create currently configured database
  db:drop                                     Drop current database
  db:dump                                     Dumps database with mysqldump cli client
  db:import                                   Imports database with mysql cli client according to database defined in env.php
  db:info                                     Dumps database informations
  db:maintain:check-tables                    Check database tables
  db:query                                    Executes an SQL query on the database defined in env.php
  db:status                                   Shows important server status information or custom selected status values
  db:variables                                Shows important variables or custom selected
 deploy
  deploy:mode:set                             Set application mode.
  deploy:mode:show                            Displays current application mode.
 design
  design:demo-notice                          Toggles demo store notice for a store view
 dev
  dev:asset:clear                             Clear static assets
  dev:console                                 Opens PHP interactive shell with initialized Mage::app() (Experimental)
  dev:di:info                                 Provides information on Dependency Injection configuration for the Command.
  dev:module:create                           Create and register a new magento module.
  dev:module:list                             List all installed modules
  dev:module:observer:list                    Lists all registered observers
  dev:profiler:disable                        Disable the profiler.
  dev:profiler:enable                         Enable the profiler.
  dev:query-log:disable                       Disable DB query logging
  dev:query-log:enable                        Enable DB query logging
  dev:report:count                            Get count of report files
  dev:source-theme:deploy                     Collects and publishes source files for theme.
  dev:symlinks                                Toggle allow symlinks setting
  dev:template-hints                          Toggles template hints
  dev:template-hints-blocks                   Toggles template hints block names
  dev:template-hints:disable                  Disable frontend template hints. A cache flush might be required.
  dev:template-hints:enable                   Enable frontend template hints. A cache flush might be required.
  dev:tests:run                               Runs tests
  dev:theme:list                              Lists all available themes
  dev:urn-catalog:generate                    Generates the catalog of URNs to *.xsd mappings for the IDE to highlight xml.
  dev:xml:convert                             Converts XML file using XSL style sheets
 dpd
  dpd:shipment:track                          Track DPD Shipment
 eav
  eav:attribute:list                          List EAV attributes
  eav:attribute:remove                        Remove attribute for a given attribute code
  eav:attribute:view                          View information about an EAV attribute
 encryption
  encryption:payment-data:update              Re-encrypts encrypted credit card data with latest encryption cipher.
 farfetch
  farfetch:inventory:sync                     Sync Inventory for Farfetch Products
  farfetch:order:invoice                      Invoice Accepted Farfetch Orders
  farfetch:order:sync                         Get Farfetch Orders
  farfetch:order:update                       Get Farfetch Order Updates
 generation
  generation:flush                            Flushs generated code like factories and proxies
 i18n
  i18n:collect-phrases                        Discovers phrases in the codebase
  i18n:pack                                   Saves language package
  i18n:uninstall                              Uninstalls language packages
 index
  index:list                                  Lists all magento indexes
  index:trigger:recreate                      ReCreate all triggers
 indexer
  indexer:info                                Shows allowed Indexers
  indexer:reindex                             Reindexes Data
  indexer:reset                               Resets indexer status to invalid
  indexer:set-dimensions-mode                 Set Indexer Dimensions Mode
  indexer:set-mode                            Sets index mode type
  indexer:show-dimensions-mode                Shows Indexer Dimension Mode
  indexer:show-mode                           Shows Index Mode
  indexer:status                              Shows status of Indexer
 info
  info:adminuri                               Displays the Magento Admin URI
  info:backups:list                           Prints list of available backup files
  info:currency:list                          Displays the list of available currencies
  info:dependencies:show-framework            Shows number of dependencies on Magento framework
  info:dependencies:show-modules              Shows number of dependencies between modules
  info:dependencies:show-modules-circular     Shows number of circular dependencies between modules
  info:language:list                          Displays the list of available language locales
  info:timezone:list                          Displays the list of available timezones
 maintenance
  maintenance:allow-ips                       Sets maintenance mode exempt IPs
  maintenance:disable                         Disables maintenance mode
  maintenance:enable                          Enables maintenance mode
  maintenance:status                          Displays maintenance mode status
 media
  media:dump                                  Creates an archive with content of media folder.
 mirasvit
  mirasvit:collect:phrases                    Collect frontend phrases
  mirasvit:feed:cron                          Run cron jobs for extension
  mirasvit:feed:delivery                      Delivery Feed
  mirasvit:feed:export                        Export Feed
  mirasvit:report:cron                        Run module cronjobs
  mirasvit:report:info                        Returns current schema
  mirasvit:report:test                        For testing purpose
  mirasvit:validate                           Validate Mirasvit Extensions
 module
  module:disable                              Disables specified modules
  module:enable                               Enables specified modules
  module:status                               Displays status of modules
  module:uninstall                            Uninstalls modules installed by composer
 msp
  msp:security:recaptcha:disable              Disable backend reCaptcha
  msp:security:tfa:disable                    Globally disable two factor auth
  msp:security:tfa:providers                  List all available providers
  msp:security:tfa:reset                      Reset configuration for one user
 newrelic
  newrelic:create:deploy-marker               Check the deploy queue for entries and create an appropriate deploy marker.
 ps
  ps:catalog:import:inventory                 Run Catalog Inventory Import
  ps:catalog:import:inventory:digital         Run Catalog Digital Inventory Import
  ps:catalog:import:inventory:incremental     Run Catalog Incremental Inventory Import
  ps:catalog:import:price                     Run Catalog Price Import
  ps:catalog:import:products                  Run Catalog Product Import
  ps:catalog:import:sale_price                Run Catalog Sale Price Import
  ps:catalog:product:link_related             Link Alternate Colour SKUs as Related Items
  ps:catalog:product:refresh_new              Remove Products from New Arrivals Category with New-End-Dates in the Past
  ps:catalog:product:remove_old_season        Remove Old Season Products & Create Redirects.
  ps:catalog:product:sale_carryover           Sets In Sale Attribute to yes all for products NOT in the file and to yes for all other products
  ps:catalog:product:sale_further_reductions  Sets Shop By Attribute to 50% OFF on all Sale products that are not on File
  ps:catalog:product:sale_loss_leaders        Sets Shop By Attribute to 30% OFF on all Sale products that are on File to 50% off to other sale products
  ps:catalog:product:url_redirects            Create custom 301 redirects from Urls provided in a CSV File.
  ps:customer:dotmailer:contact:import:all    Import all contacts from dotmailer
  ps:customer:dotmailer:contact:import:daily  Import daily contacts from dotmailer
  ps:dhlexport:shipmentdata:import            Run the DHL shipment data import
  ps:notification:text_message:send           Send Text Message Notification
  ps:sales:order:adyen:cancel:hpp             Adyen Cancel HPP orders over 12hrs old
  ps:sales:order:adyen:payment:review         Process Adyen orders stuck at payment review
  ps:sales:order:confirm:refunds              Confirm Refunds with Prima ERP by Passing Increment Id of Order
  ps:sales:order:create_shipment              Create Shipment for Orders with a Tracking Number and Ready to Ship Status.
  ps:sales:order:evalute_ranks                Evaluate a Rank of an Order or all Orders
  ps:sales:order:export_customers             Export Customers into an XML File For Prima ERP. Can Pass Multiple Increment Ids as Argument.
  ps:sales:order:orders_delivered             Mark shipped orders as delivered.
  ps:sales:order:process:returns              Process Returns
  ps:sales:order:review                       Run order review task
  ps:sales:order:sync                         Run order sync task
  ps:sales:order:sync:child:subscription      Run Order Sync Task For Only Child Subscription.
  ps:sales:order:sync:dispatches              Run order dispatch ID sync task
  ps:subscription:gift:email:send             Run the product subscription gift email generation!
  ps:subscription:order:generation            Run the product subscription order generation!
 queue
  queue:consumers:list                        List of MessageQueue consumers
  queue:consumers:start                       Start MessageQueue consumer
 script
  script:repo:list                            Lists all scripts in repository
  script:repo:run                             Run script from repository
 search
  search:engine:list                          Lists all registered search engines
 setup
  setup:backup                                Takes backup of Magento Application code base, media and database
  setup:config:set                            Creates or modifies the deployment configuration
  setup:cron:run                              Runs cron job scheduled for setup application
  setup:db-data:upgrade                       Installs and upgrades data in the DB
  setup:db-declaration:generate-patch         Generate patch and put it in specific folder.
  setup:db-declaration:generate-whitelist     Generate whitelist of tables and columns that are allowed to be edited by declaration installer
  setup:db-schema:add-slave                   Move checkout quote related tables to a separate DB server
  setup:db-schema:split-quote                 Move checkout quote related tables to a separate DB server
  setup:db-schema:split-sales                 Move sales related tables to a separate DB server
  setup:db-schema:upgrade                     Installs and upgrades the DB schema
  setup:db:status                             Checks if DB schema or data requires upgrade
  setup:di:compile                            Generates DI configuration and all missing classes that can be auto-generated
  setup:install                               Installs the Magento application
  setup:performance:generate-fixtures         Generates fixtures
  setup:rollback                              Rolls back Magento Application codebase, media and database
  setup:static-content:deploy                 Deploys static view files
  setup:store-config:set                      Installs the store configuration. Deprecated since 2.2.0. Use config:set instead
  setup:uninstall                             Uninstalls the Magento application
  setup:upgrade                               Upgrades the Magento application, DB data, and schema
 store
  store:list                                  Displays the list of stores
  store:website:list                          Displays the list of websites
 support
  support:backup:code                         Create Code backup
  support:backup:db                           Create DB backup
  support:utility:check                       Check required backup utilities
  support:utility:paths                       Create utilities paths list
 sys
  sys:check                                   Checks Magento System
  sys:cron:history                            Last executed cronjobs with status.
  sys:cron:list                               Lists all cronjobs
  sys:cron:run                                Runs a cronjob by job code
  sys:cron:schedule                           Schedule a cronjob for execution right now, by job code
  sys:info                                    Prints infos about the current magento system.
  sys:maintenance                             Toggles maintenance mode if --on or --off preferences are not set
  sys:setup:change-version                    Change module resource version
  sys:setup:compare-versions                  Compare module version with setup_module table.
  sys:setup:downgrade-versions                Automatically downgrade schema and module versions
  sys:store:config:base-url:list              Lists all base urls
  sys:store:list                              Lists all installed store-views
  sys:url:list                                Get all urls.
  sys:website:list                            Lists all websites
 theme
  theme:uninstall                             Uninstalls theme
 varnish
  varnish:vcl:generate                        Generates Varnish VCL and echos it to the command line
➜  mag-2-3-2 git:(develop) mag2 deploy:mode:set production
Enabling maintenance mode
Starting compilation
Compilation was started.
%message% 0/7 [>---------]   0% < 1 sec 98.0 MiB%message% 0/7 [>---------]   0% < 1 sec 98.0 MiBProxies code generation... 0/7 [>]   0% < 1 sec 98.0 MiB
Proxies code generation... 1/7 [>]  14% < 1 sec 102.0 MiB
Repositories code generation... 1/7 [>]  14% < 1 sec 102.0 MiB
Repositories code generation... 2/7 [>]  28% 16 secs 250.0 MiB
Service data attributes generation... 2/7 [>]  28% 16 secs 250.0 MiB
Service data attributes generation... 3/7 [>]  42% 16 secs 250.0 MiB
Application code generator... 3/7 [>]  42% 16 secs 250.0 MiB
Application code generator... 4/7 [>]  57% 33 secs 274.0 MiB
Interceptors generation... 4/7 [>]  57% 33 secs 274.0 MiB
Interceptors generation... 5/7 [>]  71% 1 min 354.0 MiB
Area configuration aggregation... 5/7 [>]  71% 1 min 354.0 MiB
Area configuration aggregation... 6/7 [>]  85% 1 min 472.0 MiB
Interception cache generation... 6/7 [>]  85% 1 min 472.0 MiB
Interception cache generation... 7/7 [=] 100% 1 min 472.0 MiB
Generated code and dependency injection configuration successfully.
Compilation complete
Starting deployment of static content

Deploy using quick strategy
frontend/Magento/blank/en_US            0/3407              >----------------frontend/Magento/blank/en_US            12/3407             >----------------frontend/Magento/blank/en_US            104/3407            >----------------frontend/Magento/blank/en_US            206/3407            =>---------------frontend/Magento/blank/en_US            424/3407            ===>-------------frontend/Magento/blank/en_US            956/3407            =======>---------frontend/Magento/blank/en_US            1253/3407           ==========>------frontend/Magento/blank/en_US            1463/3407           ============>----frontend/Magento/blank/en_US            2077/3407           =================frontend/Magento/blank/en_US            2617/3407           =================frontend/Magento/blank/en_US            2845/3407           =================frontend/Magento/blank/en_US            3101/3407           =================frontend/Magento/blank/en_US            3308/3407           =================frontend/Magento/blank/en_US            3309/3407           =================frontend/Magento/blank/en_US            3311/3407           =================frontend/Magento/blank/en_US            3313/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  23 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  11 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  21 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  18 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  17 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  22 secs
adminhtml/Magento/backend/en_GB         3417/3417           ============================ 100% %  22 secs
frontend/Magento/luma/en_US             3424/3424           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/fr_FR        3965/3965           ============================ 100% %  12 secs
frontend/PaulSmith/bicycle/en_GB        3965/3965           ============================ 100% %  12 secs
adminhtml/PaulSmith/stripes/fr_FR       3417/3417           ============================ 100% %  21 secs
adminhtml/PaulSmith/stripes/en_GB       3417/3417           ============================ 100% %  20 secs
frontend/Magento/luma/fr_FR             3424/3424           ============================ 100% %  17 secs
frontend/Magento/luma/en_GB             3424/3424           ============================ 100% %  17 secs

Execution time: 319.09363603592
Deployment of static content complete
Disabling maintenance mode
Enabled production mode.
➜  mag-2-3-2 git:(develop) mag2 deploy:mode:set developer
Enabled developer mode.
➜  mag-2-3-2 git:(develop) mag2 deploy:mode:set production
Enabling maintenance mode
Starting compilation
Compilation was started.
%message% 0/7 [>---------------------------]   0% < 1 sec 98.0 MiB%message% 0/7 [>---------------------------]   0% < 1 sec 98.0 MiBProxies code generation... 0/7 [>---------------------]   0% < 1 sec 98.0 MiB
Proxies code generation... 1/7 [===>-----------------]  14% < 1 sec 102.0 MiB
Repositories code generation... 1/7 [==>-------------]  14% < 1 sec 102.0 MiB
Repositories code generation... 2/7 [====>-----------]  28% 17 secs 250.0 MiB
Service data attributes generation... 2/7 [==>-------]  28% 17 secs 250.0 MiB
Service data attributes generation... 3/7 [====>-----]  42% 17 secs 250.0 MiB
Application code generator... 3/7 [====>-----]  42% 17 secs 250.0 MiB
Application code generator... 4/7 [=====>----]  57% 30 secs 274.0 MiB
Interceptors generation... 4/7 [=====>----]  57% 30 secs 274.0 MiB
Interceptors generation... 5/7 [=======>--]  71% 1 min 354.0 MiB
Area configuration aggregation... 5/7 [=======>--]  71% 1 min 354.0 MiB
Area configuration aggregation... 6/7 [========>-]  85% 2 mins 472.0 MiB
Interception cache generation... 6/7 [========>-]  85% 2 mins 472.0 MiB
Interception cache generation... 7/7 [==========] 100% 2 mins 472.0 MiB
Generated code and dependency injection configuration successfully.
Compilation complete
Starting deployment of static content

Deploy using quick strategy
frontend/Magento/blank/en_US            0/3407              >----------------frontend/Magento/blank/en_US            18/3407             >----------------frontend/Magento/blank/en_US            67/3407             >----------------frontend/Magento/blank/en_US            196/3407            =>---------------frontend/Magento/blank/en_US            229/3407            =>---------------frontend/Magento/blank/en_US            417/3407            ===>-------------frontend/Magento/blank/en_US            630/3407            =====>-----------frontend/Magento/blank/en_US            975/3407            ========>--------frontend/Magento/blank/en_US            1357/3407           ===========>-----frontend/Magento/blank/en_US            1585/3407           =============>---frontend/Magento/blank/en_US            2161/3407           =================frontend/Magento/blank/en_US            2590/3407           =================frontend/Magento/blank/en_US            2760/3407           =================frontend/Magento/blank/en_US            2936/3407           =================frontend/Magento/blank/en_US            3103/3407           =================frontend/Magento/blank/en_US            3308/3407           =================frontend/Magento/blank/en_US            3309/3407           =================frontend/Magento/blank/en_US            3311/3407           =================frontend/Magento/blank/en_US            3314/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  21 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  24 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  16 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  25 secs
frontend/Magento/blank/fr_FR            3407/3407           ============================ 100% %  17 secs
frontend/Magento/blank/en_GB            3407/3407           ============================ 100% %  19 secs
adminhtml/Magento/backend/fr_FR         3417/3417           ============================ 100% %  23 secs
adminhtml/Magento/backend/en_GB         3417/3417           ============================ 100% %  23 secs
frontend/Magento/luma/en_US             3424/3424           ============================ 100% %  18 secs
frontend/PaulSmith/bicycle/fr_FR        3965/3965           ============================ 100% %  11 secs
frontend/PaulSmith/bicycle/en_GB        3965/3965           ============================ 100% %  12 secs
adminhtml/PaulSmith/stripes/fr_FR       3417/3417           ============================ 100% %  19 secs
adminhtml/PaulSmith/stripes/en_GB       3417/3417           ============================ 100% %  19 secs
frontend/Magento/luma/fr_FR             3424/3424           ============================ 100% %  16 secs
frontend/Magento/luma/en_GB             3424/3424           ============================ 100% %  16 secs

Execution time: 317.41693592072
Deployment of static content complete
Disabling maintenance mode
Enabled production mode.
➜  mag-2-3-2 git:(develop) bin/magento
Magento CLI 2.3.2

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  help                                        Displays help for a command
  list                                        Lists commands
 admin
  admin:user:create                           Creates an administrator
  admin:user:unlock                           Unlock Admin Account
 app
  app:config:dump                             Create dump of application
  app:config:import                           Import data from shared configuration files to appropriate data storage
  app:config:status                           Checks if config propagation requires update
 cache
  cache:clean                                 Cleans cache type(s)
  cache:disable                               Disables cache type(s)
  cache:enable                                Enables cache type(s)
  cache:flush                                 Flushes cache storage used by cache type(s)
  cache:status                                Checks cache status
 catalog
  catalog:images:resize                       Creates resized product images
  catalog:product:attributes:cleanup          Removes unused product attributes.
 config
  config:sensitive:set                        Set sensitive configuration values
  config:set                                  Change system configuration
  config:show                                 Shows configuration value for given path. If path is not specified, all saved values will be shown
 cron
  cron:install                                Generates and installs crontab for current user
  cron:remove                                 Removes tasks from crontab
  cron:run                                    Runs jobs by schedule
 cronmanager
  cronmanager:killjob                         Kill cron jobs by code
  cronmanager:runjob                          Run a specific cron job by its job_code
  cronmanager:showjobs                        Show all cron job codes in Magento
 customer
  customer:hash:upgrade                       Upgrade customer's hash according to the latest algorithm
 deploy
  deploy:mode:set                             Set application mode.
  deploy:mode:show                            Displays current application mode.
 dev
  dev:di:info                                 Provides information on Dependency Injection configuration for the Command.
  dev:profiler:disable                        Disable the profiler.
  dev:profiler:enable                         Enable the profiler.
  dev:query-log:disable                       Disable DB query logging
  dev:query-log:enable                        Enable DB query logging
  dev:source-theme:deploy                     Collects and publishes source files for theme.
  dev:template-hints:disable                  Disable frontend template hints. A cache flush might be required.
  dev:template-hints:enable                   Enable frontend template hints. A cache flush might be required.
  dev:tests:run                               Runs tests
  dev:urn-catalog:generate                    Generates the catalog of URNs to *.xsd mappings for the IDE to highlight xml.
  dev:xml:convert                             Converts XML file using XSL style sheets
 dpd
  dpd:shipment:track                          Track DPD Shipment
 encryption
  encryption:payment-data:update              Re-encrypts encrypted credit card data with latest encryption cipher.
 farfetch
  farfetch:inventory:sync                     Sync Inventory for Farfetch Products
  farfetch:order:invoice                      Invoice Accepted Farfetch Orders
  farfetch:order:sync                         Get Farfetch Orders
  farfetch:order:update                       Get Farfetch Order Updates
 i18n
  i18n:collect-phrases                        Discovers phrases in the codebase
  i18n:pack                                   Saves language package
  i18n:uninstall                              Uninstalls language packages
 indexer
  indexer:info                                Shows allowed Indexers
  indexer:reindex                             Reindexes Data
  indexer:reset                               Resets indexer status to invalid
  indexer:set-dimensions-mode                 Set Indexer Dimensions Mode
  indexer:set-mode                            Sets index mode type
  indexer:show-dimensions-mode                Shows Indexer Dimension Mode
  indexer:show-mode                           Shows Index Mode
  indexer:status                              Shows status of Indexer
 info
  info:adminuri                               Displays the Magento Admin URI
  info:backups:list                           Prints list of available backup files
  info:currency:list                          Displays the list of available currencies
  info:dependencies:show-framework            Shows number of dependencies on Magento framework
  info:dependencies:show-modules              Shows number of dependencies between modules
  info:dependencies:show-modules-circular     Shows number of circular dependencies between modules
  info:language:list                          Displays the list of available language locales
  info:timezone:list                          Displays the list of available timezones
 maintenance
  maintenance:allow-ips                       Sets maintenance mode exempt IPs
  maintenance:disable                         Disables maintenance mode
  maintenance:enable                          Enables maintenance mode
  maintenance:status                          Displays maintenance mode status
 mirasvit
  mirasvit:collect:phrases                    Collect frontend phrases
  mirasvit:feed:cron                          Run cron jobs for extension
  mirasvit:feed:delivery                      Delivery Feed
  mirasvit:feed:export                        Export Feed
  mirasvit:report:cron                        Run module cronjobs
  mirasvit:report:info                        Returns current schema
  mirasvit:report:test                        For testing purpose
  mirasvit:validate                           Validate Mirasvit Extensions
 module
  module:disable                              Disables specified modules
  module:enable                               Enables specified modules
  module:status                               Displays status of modules
  module:uninstall                            Uninstalls modules installed by composer
 msp
  msp:security:recaptcha:disable              Disable backend reCaptcha
  msp:security:tfa:disable                    Globally disable two factor auth
  msp:security:tfa:providers                  List all available providers
  msp:security:tfa:reset                      Reset configuration for one user
 newrelic
  newrelic:create:deploy-marker               Check the deploy queue for entries and create an appropriate deploy marker.
 ps
  ps:catalog:import:inventory                 Run Catalog Inventory Import
  ps:catalog:import:inventory:digital         Run Catalog Digital Inventory Import
  ps:catalog:import:inventory:incremental     Run Catalog Incremental Inventory Import
  ps:catalog:import:price                     Run Catalog Price Import
  ps:catalog:import:products                  Run Catalog Product Import
  ps:catalog:import:sale_price                Run Catalog Sale Price Import
  ps:catalog:product:link_related             Link Alternate Colour SKUs as Related Items
  ps:catalog:product:refresh_new              Remove Products from New Arrivals Category with New-End-Dates in the Past
  ps:catalog:product:remove_old_season        Remove Old Season Products & Create Redirects.
  ps:catalog:product:sale_carryover           Sets In Sale Attribute to yes all for products NOT in the file and to yes for all other products
  ps:catalog:product:sale_further_reductions  Sets Shop By Attribute to 50% OFF on all Sale products that are not on File
  ps:catalog:product:sale_loss_leaders        Sets Shop By Attribute to 30% OFF on all Sale products that are on File to 50% off to other sale products
  ps:catalog:product:url_redirects            Create custom 301 redirects from Urls provided in a CSV File.
  ps:customer:dotmailer:contact:import:all    Import all contacts from dotmailer
  ps:customer:dotmailer:contact:import:daily  Import daily contacts from dotmailer
  ps:dhlexport:shipmentdata:import            Run the DHL shipment data import
  ps:notification:text_message:send           Send Text Message Notification
  ps:sales:order:adyen:cancel:hpp             Adyen Cancel HPP orders over 12hrs old
  ps:sales:order:adyen:payment:review         Process Adyen orders stuck at payment review
  ps:sales:order:confirm:refunds              Confirm Refunds with Prima ERP by Passing Increment Id of Order
  ps:sales:order:create_shipment              Create Shipment for Orders with a Tracking Number and Ready to Ship Status.
  ps:sales:order:evalute_ranks                Evaluate a Rank of an Order or all Orders
  ps:sales:order:export_customers             Export Customers into an XML File For Prima ERP. Can Pass Multiple Increment Ids as Argument.
  ps:sales:order:orders_delivered             Mark shipped orders as delivered.
  ps:sales:order:process:returns              Process Returns
  ps:sales:order:review                       Run order review task
  ps:sales:order:sync                         Run order sync task
  ps:sales:order:sync:child:subscription      Run Order Sync Task For Only Child Subscription.
  ps:sales:order:sync:dispatches              Run order dispatch ID sync task
  ps:subscription:gift:email:send             Run the product subscription gift email generation!
  ps:subscription:order:generation            Run the product subscription order generation!
 queue
  queue:consumers:list                        List of MessageQueue consumers
  queue:consumers:start                       Start MessageQueue consumer
 setup
  setup:backup                                Takes backup of Magento Application code base, media and database
  setup:config:set                            Creates or modifies the deployment configuration
  setup:cron:run                              Runs cron job scheduled for setup application
  setup:db-data:upgrade                       Installs and upgrades data in the DB
  setup:db-declaration:generate-patch         Generate patch and put it in specific folder.
  setup:db-declaration:generate-whitelist     Generate whitelist of tables and columns that are allowed to be edited by declaration installer
  setup:db-schema:add-slave                   Move checkout quote related tables to a separate DB server
  setup:db-schema:split-quote                 Move checkout quote related tables to a separate DB server
  setup:db-schema:split-sales                 Move sales related tables to a separate DB server
  setup:db-schema:upgrade                     Installs and upgrades the DB schema
  setup:db:status                             Checks if DB schema or data requires upgrade
  setup:di:compile                            Generates DI configuration and all missing classes that can be auto-generated
  setup:install                               Installs the Magento application
  setup:performance:generate-fixtures         Generates fixtures
  setup:rollback                              Rolls back Magento Application codebase, media and database
  setup:static-content:deploy                 Deploys static view files
  setup:store-config:set                      Installs the store configuration. Deprecated since 2.2.0. Use config:set instead
  setup:uninstall                             Uninstalls the Magento application
  setup:upgrade                               Upgrades the Magento application, DB data, and schema
 store
  store:list                                  Displays the list of stores
  store:website:list                          Displays the list of websites
 support
  support:backup:code                         Create Code backup
  support:backup:db                           Create DB backup
  support:utility:check                       Check required backup utilities
  support:utility:paths                       Create utilities paths list
 theme
  theme:uninstall                             Uninstalls theme
 varnish
  varnish:vcl:generate                        Generates Varnish VCL and echos it to the command line
➜  mag-2-3-2 git:(develop) bin/magento   setup:static-content:deploy

Deploy using quick strategy
frontend/Magento/blank/en_US            0/3407              >----------------frontend/Magento/blank/en_US            235/3407            =>---------------frontend/Magento/blank/en_US            822/3407            ======>----------frontend/Magento/blank/en_US            1248/3407           ==========>------frontend/Magento/blank/en_US            1780/3407           ==============>--frontend/Magento/blank/en_US            2354/3407           =================frontend/Magento/blank/en_US            2860/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  6 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  8 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  8 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  9 secs
frontend/Magento/luma/en_US             3424/3424           ============================ 100% %  6 secs

Execution time: 72.130625963211
➜  mag-2-3-2 git:(develop) bin/magento   setup:static-content:deploy

Deploy using quick strategy
frontend/Magento/blank/en_US            0/3407              >----------------frontend/Magento/blank/en_US            88/3407             >----------------frontend/Magento/blank/en_US            459/3407            ===>-------------frontend/Magento/blank/en_US            682/3407            =====>-----------frontend/Magento/blank/en_US            952/3407            =======>---------frontend/Magento/blank/en_US            1248/3407           ==========>------frontend/Magento/blank/en_US            1756/3407           ==============>--frontend/Magento/blank/en_US            2296/3407           =================frontend/Magento/blank/en_US            2783/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  8 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3965/3965           ============================ 100% %  7 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  5 secs
frontend/Magento/luma/en_US             3424/3424           ============================ 100% %  6 secs

Execution time: 60.484455823898
➜  mag-2-3-2 git:(develop) bin/magento   setup:static-content:deploy

Deploy using quick strategy
frontend/Magento/blank/en_US            0/3407              >----------------frontend/Magento/blank/en_US            673/3407            =====>-----------frontend/Magento/blank/en_US            1557/3407           ============>----frontend/Magento/blank/en_US            2439/3407           =================frontend/Magento/blank/en_US            3256/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3957/3957           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3957/3957           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3957/3957           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3957/3957           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3957/3957           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  4 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  5 secs
frontend/PaulSmith/bicycle/en_US        3957/3957           ============================ 100% %  7 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  5 secs
frontend/Magento/luma/en_US             3424/3424           ============================ 100% %  5 secs

Execution time: 48.634505033493
➜  mag-2-3-2 git:(develop) bin/magento   setup:static-content:deploy

Deploy using quick strategy
frontend/Magento/blank/en_US            0/3407              >----------------frontend/Magento/blank/en_US            501/3407            ====>------------frontend/Magento/blank/en_US            2306/3407           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  2 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  2 secs
frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  2 secs
frontend/PaulSmith/bicycle/en_US        3956/3956           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  2 secs
frontend/PaulSmith/bicycle/en_US        3956/3956           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  2 secs
frontend/PaulSmith/bicycle/en_US        3956/3956           =================frontend/Magento/blank/en_US            3407/3407           ============================ 100% %  2 secs
adminhtml/Magento/backend/en_US         3417/3417           ============================ 100% %  2 secs
frontend/PaulSmith/bicycle/en_US        3956/3956           ============================ 100% %  2 secs
adminhtml/PaulSmith/stripes/en_US       3417/3417           ============================ 100% %  2 secs
frontend/Magento/luma/en_US             3424/3424           ============================ 100% %  2 secs

Execution time: 22.036489963531
➜  mag-2-3-2 git:(develop) mag2 deploy:mode:set production
Enabling maintenance mode
^Z
[1]  + 70268 suspended  n98-magerun2.phar deploy:mode:set production
➜  mag-2-3-2 git:(develop) mag2 deploy:mode:set developer
Enabled developer mode.
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (c387ded => 303b2b6):     The package has modified files:
    D  SVS_GiftCard/requirejs-config.js
    M SVS_GiftCard/templates/product/type/giftcard/date.phtml
    D  SVS_GiftCard/web/js/giftcardcalendar.js
    Discard changes [y,n,v,d,s,?]? y
 Checking out 303b2b6076
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "gift card"
[develop 6e5ee27f] gift card
 1 file changed, 4 insertions(+), 4 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 441 bytes | 441.00 KiB/s, done.
Total 3 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 2 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   66a47037..6e5ee27f  develop -> develop
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (303b2b6 => 6ce2e8b):  Checking out 6ce2e8b36d
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "gift card"
[develop 379434a0] gift card
 1 file changed, 4 insertions(+), 4 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 440 bytes | 440.00 KiB/s, done.
Total 3 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 2 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   6e5ee27f..379434a0  develop -> develop
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (6ce2e8b => 1adc9f9):  Checking out 1adc9f946e
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "gift card"
[develop d529745a] gift card
 1 file changed, 5 insertions(+), 5 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 474 bytes | 474.00 KiB/s, done.
Total 3 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 2 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   379434a0..d529745a  develop -> develop
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 2 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-click-reserve dev-develop (aacab05 => 6ac8505):  Checking out 6ac85055de
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (1adc9f9 => efa6658):  Checking out efa6658fcc
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
pick b026e0ea gift card
npm build
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "npm build"
[develop e7be6df6] npm build
 1 file changed, 10 insertions(+), 10 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 588 bytes | 588.00 KiB/s, done.
Total 3 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 2 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   d529745a..e7be6df6  develop -> develop
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (efa6658 => ec9c304):  Checking out ec9c3044b6
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
pick b5e53ddc Customers Cannot Check Gift Card Balance #1260 Product Title NoCustomers Cannot Check Gift Card Balance #1260
➜  mag-2-3-2 git:(develop) ✗ git commit -m "npm build"
[develop b7823593] npm build
 1 file changed, 4 insertions(+), 4 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 447 bytes | 447.00 KiB/s, done.
Total 3 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 2 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   e7be6df6..b7823593  develop -> develop
➜  mag-2-3-2 git:(develop) git rebase -i HEAD~7
[detached HEAD f4da6724] npm build
 Date: Mon Sep 2 10:18:13 2019 +0100
 2 files changed, 26 insertions(+), 19 deletions(-)
Successfully rebased and updated refs/heads/develop.
➜  mag-2-3-2 git:(develop) git push origin develop
To github.com:paulsmithltd/paulsmith.com.git
 ! [rejected]          develop -> develop (non-fast-forward)
error: failed to push some refs to 'git@github.com:paulsmithltd/paulsmith.com.git'
hint: Updates were rejected because the tip of your current branch is behind
hint: its remote counterpart. Integrate the remote changes (e.g.
hint: 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-theme-bicycle dev-develop (ec9c304 => 2ff1d73):  Checking out 2ff1d73387
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "npm build"
[develop e8e06a0f] npm build
 1 file changed, 4 insertions(+), 4 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin develop
To github.com:paulsmithltd/paulsmith.com.git
 ! [rejected]          develop -> develop (non-fast-forward)
error: failed to push some refs to 'git@github.com:paulsmithltd/paulsmith.com.git'
hint: Updates were rejected because the tip of your current branch is behind
hint: its remote counterpart. Integrate the remote changes (e.g.
hint: 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
pick 41119664 Customers Cannot Check Gift Card Balance #1260 Product Title NoCustomers Cannot Check Gift Card Balance #1260
➜  mag-2-3-2 git:(develop) git rebase -i HEAD~3
[detached HEAD 41119664] Customers Cannot Check Gift Card Balance #1260 Product Title Not Pulling Through to GA #1263 Cannot view old orders #1265 Manual Refund Unable to Update Total #1269 Create kill switch for Click & Reserve #1264 Newsletter image is wrong height #1267
 Date: Mon Sep 2 09:39:44 2019 +0100
 2 files changed, 359 insertions(+), 112 deletions(-)
Successfully rebased and updated refs/heads/develop.
➜  mag-2-3-2 git:(develop) git push origin -f develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 3.29 KiB | 480.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
 + b7823593...41119664 develop -> develop (forced update)
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 3 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-click-reserve (dev-develop 6ac8505 => v2.0.2):  Checking out 8cc71b71f8
  - Updating paulsmithltd/magento2-return-forms (dev-develop 46bafdb => v2.0.1):  Checking out 46bafdba7e
  - Updating paulsmithltd/magento2-theme-bicycle (dev-develop 2ff1d73 => v5.0.1):  Checking out 2ff1d73387
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(develop) ✗ git add -A
➜  mag-2-3-2 git:(develop) ✗ git commit -m "merge"
[develop bb23eb83] merge
 2 files changed, 21 insertions(+), 43 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin -f develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 860 bytes | 860.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   41119664..bb23eb83  develop -> develop
➜  mag-2-3-2 git:(develop) git rebase -i HEAD~2
[detached HEAD 4f68bbf9] Customers Cannot Check Gift Card Balance #1260 Product Title Not Pulling Through to GA #1263 Cannot view old orders #1265 Manual Refund Unable to Update Total #1269 Create kill switch for Click & Reserve #1264 Newsletter image is wrong height #1267
 Date: Mon Sep 2 09:39:44 2019 +0100
 2 files changed, 333 insertions(+), 108 deletions(-)
Successfully rebased and updated refs/heads/develop.
➜  mag-2-3-2 git:(develop) git push origin develop
To github.com:paulsmithltd/paulsmith.com.git
 ! [rejected]          develop -> develop (non-fast-forward)
error: failed to push some refs to 'git@github.com:paulsmithltd/paulsmith.com.git'
hint: Updates were rejected because the tip of your current branch is behind
hint: its remote counterpart. Integrate the remote changes (e.g.
hint: 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
➜  mag-2-3-2 git:(develop) git push origin -f develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 3.24 KiB | 474.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
 + bb23eb83...4f68bbf9 develop -> develop (forced update)
➜  mag-2-3-2 git:(develop)
➜  mag-2-3-2 git:(develop)
➜  mag-2-3-2 git:(feature-187) ✗ git checkout master
app/etc/config.php: needs merge
composer.json: needs merge
error: you need to resolve your current index first
➜  mag-2-3-2 git:(feature-187) ✗ git stash
app/etc/config.php: needs merge
composer.json: needs merge
app/etc/config.php: needs merge
composer.json: needs merge
app/etc/config.php: unmerged (d3feb0e3212b3f46d92a9e9206b01690a4b782e8)
app/etc/config.php: unmerged (2f9d3fbb95a4914c1bbda2eef326c94853bb1ad3)
app/etc/config.php: unmerged (24e8bc388a0a236979e75f6f39b2faf3a787606f)
composer.json: unmerged (27f806cc815922281baf17058e67bfa8cfa04bf6)
composer.json: unmerged (280477dbf85818e18f5b9c7c02aa3630292a699f)
composer.json: unmerged (c5323ffcf9ecc26510fec9cc38279ea7d2d8e66e)
fatal: git-write-tree: error building trees
Cannot save the current index state
➜  mag-2-3-2 git:(feature-187) ✗ git checkout master
app/etc/config.php: needs merge
composer.json: needs merge
error: you need to resolve your current index first
➜  mag-2-3-2 git:(feature-187) ✗
➜  mag-2-3-2 git:(master) git push origin -f master
Everything up-to-date
➜  mag-2-3-2 git:(master) git pull
gitgAlready up to date.
➜  mag-2-3-2 git:(master) git pull
Already up to date.
➜  mag-2-3-2 git:(master) git fetch
➜  mag-2-3-2 git:(master) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating attraqt/attraqt-details (v1.0.1 => v1.0.2):  Checking out a0dbc2ea58
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(master) ✗ magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
The directory '/Users/bclemi/Projects/mag-2-3-2/generated/metadata/' doesn't exist - skipping cleanup
/Users/bclemi/Projects/mag-2-3-2/pub/static/deployed_version.txt
/Users/bclemi/Projects/mag-2-3-2/var/view_preprocessed/pub
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(master) magento setup:di:compile
Compilation was started.
Interception cache generation... 7/7 [==========] 100% 3 mins 460.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(master) magento c:f
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
target_rule
full_page
config_integration
config_integration_api
translate
config_webservice
ec_cache
➜  mag-2-3-2 git:(master) ✗ magento setup:di:compile
Compilation was started.
Interception cache generation... 7/7 [==========] 100% 2 mins 472.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute done
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute done
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
PHP Parse error:  syntax error, unexpected ';', expecting ',' or ')' in /Users/bclemi/Projects/mag-2-3-2/vendor/paulsmithltd/magento2-svs-giftcard/Cron/QueueGiftCardOrders.php on line 136

Parse error: syntax error, unexpected ';', expecting ',' or ')' in /Users/bclemi/Projects/mag-2-3-2/vendor/paulsmithltd/magento2-svs-giftcard/Cron/QueueGiftCardOrders.php on line 136
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Zend\Log\Exception\
  InvalidArgumentException



  [Zend\Log\Exception\InvalidArgumentException]
  $extra must be an array or implement Traversable


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute PHP Fatal error:  Uncaught Error: Call to a member function getData() on array in /Users/bclemi/Projects/mag-2-3-2/vendor/paulsmithltd/magento2-svs-giftcard/Cron/QueueGiftCardOrders.php:123
Stack trace:
#0 [internal function]: SVS\GiftCard\Cron\QueueGiftCardOrders->execute(Object(Magento\Cron\Model\Schedule\Interceptor))
#1 phar:///usr/local/bin/n98-magerun2.phar/src/N98/Magento/Command/System/Cron/RunCommand.php(60): call_user_func(Array, Object(Magento\Cron\Model\Schedule\Interceptor))
#2 /Users/bclemi/Projects/mag-2-3-2/vendor/symfony/console/Command/Command.php(255): N98\Magento\Command\System\Cron\RunCommand->execute(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#3 phar:///usr/local/bin/n98-magerun2.phar/src/N98/Magento/Command/AbstractMagentoCommand.php(362): Symfony\Component\Console\Command\Command->run(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#4 phar:///usr/local/bin/n98-magerun2.phar/src/N98/ in /Users/bclemi/Projects/mag-2-3-2/vendor/paulsmithltd/magento2-svs-giftcard/Cron/QueueGiftCardOrders.php on line 123

Fatal error: Uncaught Error: Call to a member function getData() on array in /Users/bclemi/Projects/mag-2-3-2/vendor/paulsmithltd/magento2-svs-giftcard/Cron/QueueGiftCardOrders.php:123
Stack trace:
#0 [internal function]: SVS\GiftCard\Cron\QueueGiftCardOrders->execute(Object(Magento\Cron\Model\Schedule\Interceptor))
#1 phar:///usr/local/bin/n98-magerun2.phar/src/N98/Magento/Command/System/Cron/RunCommand.php(60): call_user_func(Array, Object(Magento\Cron\Model\Schedule\Interceptor))
#2 /Users/bclemi/Projects/mag-2-3-2/vendor/symfony/console/Command/Command.php(255): N98\Magento\Command\System\Cron\RunCommand->execute(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#3 phar:///usr/local/bin/n98-magerun2.phar/src/N98/Magento/Command/AbstractMagentoCommand.php(362): Symfony\Component\Console\Command\Command->run(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#4 phar:///usr/local/bin/n98-magerun2.phar/src/N98/ in /Users/bclemi/Projects/mag-2-3-2/vendor/paulsmithltd/magento2-svs-giftcard/Cron/QueueGiftCardOrders.php on line 123
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute

  [RuntimeException]
  Cron-job "svs_giftcard_queue_orders" threw exception Exception



  [Exception]
  Notice: Array to string conversion in /Users/bclemi/Projects/mag-2-3-2/v
  endor/magento/framework/DB/Adapter/Pdo/Mysql.php on line 3101


sys:cron:run [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [--root-dir [ROOT-DIR]] [--skip-config] [--skip-root-check] [--skip-core-commands [SKIP-CORE-COMMANDS]] [--] <command> [<job>]

➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute done
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute done
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute done
➜  mag-2-3-2 git:(master) ✗ composer
 why-not dotmailer/dotmailer-magento2-extension 3.1.2
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.6.5 2018-05-04 11:44:59

Usage:
  command [options] [arguments]

Options:
  -h, --help                     Display this help message
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi                     Force ANSI output
      --no-ansi                  Disable ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
  -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  about                Shows the short information about Composer.
  archive              Creates an archive of this composer package.
  browse               Opens the package's repository URL or homepage in your browser.
  check-platform-reqs  Check that platform requirements are satisfied.
  clear-cache          Clears composer's internal package cache.
  clearcache           Clears composer's internal package cache.
  config               Sets config options.
  create-project       Creates new project from a package into given directory.
  depends              Shows which packages cause the given package to be installed.
  diagnose             Diagnoses the system to identify common errors.
  dump-autoload        Dumps the autoloader.
  dumpautoload         Dumps the autoloader.
  exec                 Executes a vendored binary/script.
  global               Allows running commands in the global composer dir ($COMPOSER_HOME).
  help                 Displays help for a command
  home                 Opens the package's repository URL or homepage in your browser.
  info                 Shows information about packages.
  init                 Creates a basic composer.json file in current directory.
  install              Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  licenses             Shows information about licenses of dependencies.
  list                 Lists commands
  outdated             Shows a list of installed packages that have updates available, including their latest version.
  prohibits            Shows which packages prevent the given package from being installed.
  remove               Removes a package from the require or require-dev.
  require              Adds required packages to your composer.json and installs them.
  run-script           Runs the scripts defined in composer.json.
  search               Searches for packages.
  self-update          Updates composer.phar to the latest version.
  selfupdate           Updates composer.phar to the latest version.
  show                 Shows information about packages.
  status               Shows a list of locally modified packages, for packages installed from source.
  suggests             Shows package suggestions.
  update               Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  upgrade              Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  validate             Validates a composer.json and composer.lock.
  why                  Shows which packages cause the given package to be installed.
  why-not              Shows which packages prevent the given package from being installed.
zsh: command not found: why-not
➜  mag-2-3-2 git:(master) ✗ composer why-not dotmailer/dotmailer-magento2-extension 3.1.2
There is no installed package depending on "dotmailer/dotmailer-magento2-extension" in versions not matching 3.1.2
➜  mag-2-3-2 git:(master) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - magento/product-enterprise-edition 2.3.2 requires magento/product-community-edition 2.3.2 -> satisfiable by magento/product-community-edition[2.3.2].
    - magento/product-enterprise-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - Installation request for magento/product-enterprise-edition 2.3.2 -> satisfiable by magento/product-enterprise-edition[2.3.2].

➜  mag-2-3-2 git:(master) ✗ magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Amazon
/Users/bclemi/Projects/mag-2-3-2/generated/code/Anowave
/Users/bclemi/Projects/mag-2-3-2/generated/code/AvaTax
/Users/bclemi/Projects/mag-2-3-2/generated/code/ClassyLlama
/Users/bclemi/Projects/mag-2-3-2/generated/code/DOMDocumentFactory.php
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dotdigitalgroup
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/Locayta
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Rocco
/Users/bclemi/Projects/mag-2-3-2/generated/code/SVS
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/adminhtml.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/crontab.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/frontend.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/global.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/graphql.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/interception.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/webapi_rest.php
/Users/bclemi/Projects/mag-2-3-2/generated/metadata/webapi_soap.php
/Users/bclemi/Projects/mag-2-3-2/pub/static/_cache
/Users/bclemi/Projects/mag-2-3-2/pub/static/adminhtml
/Users/bclemi/Projects/mag-2-3-2/pub/static/deployed_version.txt
/Users/bclemi/Projects/mag-2-3-2/pub/static/frontend
/Users/bclemi/Projects/mag-2-3-2/var/view_preprocessed/pub
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(master) ✗ magento setup:di:compile
Compilation was started.
%message% 0/7 [>]   0% < 1 sec 82.0 %message% 0/7 [>]   0% < 1 sec 82.0 Proxies code generation... 0/7 [>]  Proxies code generation... 1/7 [>]  Repositories code generation... 1/7 Repositories code generation... 2/7 Service data attributes generation..Service data attributes generation..Application code generator... 3/7 [>Application code generator... 4/7 [>Interceptors generation... 4/7 [>]  Interceptors generation... 5/7 [>]  Area configuration aggregation... 5/Area configuration aggregation... 6/Interception cache generation... 6/7Interception cache generation... 7/7Interception cache generation... 7/7 [=] 100% 2 mins 460.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(master) ✗
➜  mag-2-3-2 git:(master) ✗ mag2 sys:cron:run


  Cronjob


[1] adyen_payment_process_notification
[2] aggregate_sales_report_bestsellers_data
[3] aggregate_sales_report_coupons_data
[4] aggregate_sales_report_invoiced_data
[5] aggregate_sales_report_order_data
[6] aggregate_sales_report_refunded_data
[7] aggregate_sales_report_shipment_data
[8] aggregate_sales_report_tax_data
[9] amazon_payments_process_queued_refunds
[10] avatax_clearlog
[11] avatax_clearqueue
[12] avatax_processqueue
[13] backend_clean_cache
[14] bulk_cleanup
[15] captcha_delete_expired_images
[16] captcha_delete_old_attempts
[17] catalog_event_status_checker
[18] catalog_index_refresh_price
[19] catalog_product_alert
[20] catalog_product_attribute_value_synchronize
[21] catalog_product_flat_indexer_store_cleanup
[22] catalog_product_frontend_actions_flush
[23] catalog_product_outdated_price_values_cleanup
[24] catalogrule_apply_all
[25] consumers_runner
[26] currency_rates_update
[27] ddg_automation_abandonedcarts
[28] ddg_automation_campaign
[29] ddg_automation_catalog_sync
[30] ddg_automation_cleaner
[31] ddg_automation_customer_subscriber_guest_sync
[32] ddg_automation_email_templates
[33] ddg_automation_importer
[34] ddg_automation_order_sync
[35] ddg_automation_reviews_and_wishlist
[36] ddg_automation_status
[37] expired_tokens_cleanup
[38] farfetch_integration_order_invoice
[39] farfetch_integration_order_status_update
[40] farfetch_integration_order_sync
[41] farfetch_integration_product_stock_sync
[42] feed_export
[43] feed_history_clean
[44] flush_preview_quotas
[45] get_amazon_authorization_updates
[46] get_amazon_capture_updates
[47] indexer_clean_all_changelogs
[48] indexer_reindex_all_invalid
[49] indexer_update_all_views
[50] magento_giftcardaccount_generage_codes_pool
[51] magento_giftcardaccount_update_states
[52] magento_logging_rotate_logs
[53] magento_newrelicreporting_cron
[54] magento_reward_balance_warning_notification
[55] magento_reward_expire_points
[56] magento_salesarchive_archive_orders
[57] magento_scheduled_import_export_log_clean
[58] magento_targetrule_index_reindex
[59] messagequeue_clean_outdated_locks
[60] mst_report_email
[61] mysqlmq_clean_messages
[62] newsletter_send_all
[63] outdated_authentication_failures_cleanup
[64] paypal_fetch_settlement_reports
[65] persistent_clear_expired
[66] process_order_review
[67] ps_affiliate_returns_processor
[68] ps_catalog_delete_configurable_prices
[69] ps_catalog_import_digital_inventory
[70] ps_catalog_import_incremental_inventory
[71] ps_catalog_import_inventory
[72] ps_catalog_import_price
[73] ps_catalog_import_products
[74] ps_catalog_link_related_colours
[75] ps_catalog_refresh_new_products
[76] ps_customer_import_dotmailer_contacts
[77] ps_dhl_import_shipments
[78] ps_nextday_shipping_alert_customer_services
[79] ps_nextday_shipping_alert_processing
[80] ps_nextday_shipping_alert_warehouse
[81] ps_product_subscription_process_orders
[82] ps_product_subscription_recipient_gift_emails
[83] ps_sales_evaluate_order_rank
[84] ps_sales_order_adyen_cancel_hpp
[85] ps_sales_order_adyen_payment_review
[86] ps_sales_order_create_shipment
[87] ps_sales_order_delivered
[88] ps_sales_order_dispatch_sync
[89] ps_sales_order_return_process
[90] ps_sales_order_sync
[91] sales_clean_orders
[92] sales_clean_quotes
[93] sales_grid_order_async_insert
[94] sales_grid_order_creditmemo_async_insert
[95] sales_grid_order_invoice_async_insert
[96] sales_grid_order_shipment_async_insert
[97] sales_send_order_creditmemo_emails
[98] sales_send_order_emails
[99] sales_send_order_invoice_emails
[100] sales_send_order_shipment_emails
[101] security_clean_admin_expired_sessions
[102] security_clean_password_reset_request_event_records
[103] send_notification
[104] sitemap_generate
[105] staging_apply_version
[106] staging_remove_updates
[107] staging_synchronize_entities_period
[108] svs_giftcard_customer_balance_export
[109] svs_giftcard_deposit_reconciliation_file
[110] svs_giftcard_process_orders
[111] svs_giftcard_process_store_credit
[112] svs_giftcard_queue_orders
[113] svs_giftcard_refund_unused_credit
[114] system_backup
[115] visitor_clean
Please select job:
112
Run SVS\GiftCard\Cron\QueueGiftCardOrders::execute done
➜  mag-2-3-2 git:(master) ✗ magento c:f
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
target_rule
full_page
config_integration
config_integration_api
translate
config_webservice
ec_cache
➜  mag-2-3-2 git:(master) ✗ magento setup:di:compile
Compilation was started.
Interception cache generation... 7/7 [======================] 100% 2 mins 472.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(master) ✗ git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(master) ✗ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

    new file:   patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   lib/web/jquery/jquery-ui.js
    modified:   patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch

➜  mag-2-3-2 git:(master) ✗ git checkout -b bug-1254
M   composer.json
M   lib/web/jquery/jquery-ui.js
A   patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
Switched to a new branch 'bug-1254'
➜  mag-2-3-2 git:(bug-1254) ✗ git add patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
➜  mag-2-3-2 git:(bug-1254) ✗ git add composer.json
➜  mag-2-3-2 git:(bug-1254) ✗ composer update
Gathering patches for root package.
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - magento/product-enterprise-edition 2.3.2 requires magento/product-community-edition 2.3.2 -> satisfiable by magento/product-community-edition[2.3.2].
    - magento/product-enterprise-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - Installation request for magento/product-enterprise-edition 2.3.2 -> satisfiable by magento/product-enterprise-edition[2.3.2].

➜  mag-2-3-2 git:(bug-1254) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-payment (100.3.2): Downloading (100%)
  - Applying patches for magento/module-payment
    patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch (Payment Methods Missing from Order Grid #1254)

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(bug-1254) ✗ git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(bug-1254) ✗ git status
On branch bug-1254
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

    modified:   composer.json
    new file:   patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock
    modified:   lib/web/jquery/jquery-ui.js

➜  mag-2-3-2 git:(bug-1254) ✗ git add composer.lock
➜  mag-2-3-2 git:(bug-1254) ✗ git add composer.json
➜  mag-2-3-2 git:(bug-1254) ✗ git comit -m ""Payment Methods Missing from Order Grid #1254"
git: 'comit' is not a git command. See 'git --help'.

The most similar command is
    commit
➜  mag-2-3-2 git:(bug-1254) ✗ git commit -m ""Payment Methods Missing from Order Grid #1254"
error: pathspec 'Methods' did not match any file(s) known to git.
error: pathspec 'Missing' did not match any file(s) known to git.
error: pathspec 'from' did not match any file(s) known to git.
error: pathspec 'Order' did not match any file(s) known to git.
error: pathspec 'Grid' did not match any file(s) known to git.
➜  mag-2-3-2 git:(bug-1254) ✗ git commit -m "Payment Methods Missing from Order Grid #1254"
[bug-1254 d5b61f15] Payment Methods Missing from Order Grid #1254
 3 files changed, 35 insertions(+), 1 deletion(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
➜  mag-2-3-2 git:(bug-1254) ✗ git push origin bug-1254
Counting objects: 6, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (6/6), done.
Writing objects: 100% (6/6), 1.18 KiB | 603.00 KiB/s, done.
Total 6 (delta 4), reused 0 (delta 0)
remote: Resolving deltas: 100% (4/4), completed with 4 local objects.
remote:
remote: Create a pull request for 'bug-1254' on GitHub by visiting:
remote:      https://github.com/paulsmithltd/paulsmith.com/pull/new/bug-1254
remote:
To github.com:paulsmithltd/paulsmith.com.git
 * [new branch]        bug-1254 -> bug-1254
➜  mag-2-3-2 git:(bug-1254) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Nothing to install or update
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
➜  mag-2-3-2 git:(bug-1254) ✗ magento setup:di:compile
Compilation was started.
Interception cache generation... 7/7 [======================] 100% 2 mins 472.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(bug-1254) ✗ scp -q web@web02kvm01.psixn.net:/data/weblogs/server/php-fpm.log /Users/bclemi/Desktop/
scp: /data/weblogs/server/php-fpm.log: Permission denied
➜  mag-2-3-2 git:(bug-1254) ✗ git checkout master
M   lib/web/jquery/jquery-ui.js
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) ✗ git pull
Already up to date.
➜  mag-2-3-2 git:(master) ✗ git fetch
g%                                                         ➜  mag-2-3-2 git:(master) ✗ composer update
]Gathering patches for root package.
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 2 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating pelago/emogrifier (v2.1.1 => v2.2.0): Downloading (100%)
  - Updating zendframework/zend-loader (2.6.0 => 2.6.1): Downloading (100%)
  - Installing magento/module-payment (100.3.2): Loading from cache
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(master) ✗ magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
The directory '/Users/bclemi/Projects/mag-2-3-2/generated/metadata/' doesn't exist - skipping cleanup
/Users/bclemi/Projects/mag-2-3-2/pub/static/_cache
/Users/bclemi/Projects/mag-2-3-2/pub/static/adminhtml
/Users/bclemi/Projects/mag-2-3-2/pub/static/deployed_version.txt
/Users/bclemi/Projects/mag-2-3-2/pub/static/frontend
/Users/bclemi/Projects/mag-2-3-2/var/view_preprocessed/pub
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(master) ✗ git stash
Saved working directory and index state WIP on master: dae56d62 new products added not pulling through in categories (FSM-2807)
➜  mag-2-3-2 git:(master) composer update
Gathering patches for root package.
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 2 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating zendframework/zend-escaper (2.6.0 => 2.6.1): Downloading (100%)
  - Installing magento/module-payment (100.3.2): Loading from cache
  - Applying patches for magento/module-payment
    patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch (Payment Methods Missing from Order Grid #1254)

  - Updating adyen/module-payment (4.4.0 => 4.5.1): Downloading (100%)
  - Applying patches for adyen/module-payment
    patches/ADYEN_HIDE_HPP_GIFTCARDS_2.3.2_COMPOSER.patch (Do not show HPP payments if a Gift Card is in the order #1232)

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(master) ✗ git status
On branch master
Your branch is ahead of 'origin/master' by 1 commit.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(master) ✗ git add -A
➜  mag-2-3-2 git:(master) ✗ giti commit -m "Upgrade Adyen to 4.5.1"
zsh: command not found: giti
➜  mag-2-3-2 git:(master) ✗ git commit -m "Upgrade Adyen to 4.5.1"
[master 6ae8ad69] Upgrade Adyen to 4.5.1
 2 files changed, 36 insertions(+), 33 deletions(-)
➜  mag-2-3-2 git:(master) git reset --hard origin/master
HEAD is now at dae56d62 new products added not pulling through in categories (FSM-2807)
➜  mag-2-3-2 git:(master) git pull
Already up to date.
➜  mag-2-3-2 git:(master) git checkout develop
Switched to branch 'develop'
Your branch is behind 'origin/develop' by 2 commits, and can be fast-forwarded.
  (use "git pull" to update your local branch)
➜  mag-2-3-2 git:(develop) git pull
Updating 4f68bbf9..447b1c33
Fast-forward
 composer.json |   4 +-
 composer.lock | 423 +++++-----------------
 2 files changed, 100 insertions(+), 327 deletions(-)
➜  mag-2-3-2 git:(develop) git fetch
➜  mag-2-3-2 git:(develop)
➜  mag-2-3-2 git:(develop) ✗ composer update

Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 1 update, 1 removal
  - Removing attraqt/attraqt-details (v1.0.2)
Removing Attraqt/AttraqtDetails
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-customer (v2.0.0 => dev-feature-1288 9d3bd6b):  Checking out 9d3bd6b045
  - Installing attraqt/locayta-details (1.0.7): Downloading (100%)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

You have unmerged paths.
  (fix conflicts and run "git commit")
  (use "git merge --abort" to abort the merge)

Changes to be committed:

    modified:   composer.json
    new file:   patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch

Unmerged paths:
  (use "git add <file>..." to mark resolution)

    both modified:   composer.lock

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json

➜  mag-2-3-2 git:(develop) ✗ git add -A
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Upgrade Adyen 4.5.1#1295"
[develop be4e67b8] Upgrade Adyen 4.5.1#1295
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 1.44 KiB | 122.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   447b1c33..be4e67b8  develop -> develop
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-sales (102.0.2): Loading from cache
  - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Digital Giftcards not sending to svs #1273)
   Could not apply patch! Skipping. The error was: Cannot apply patch patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch

magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ composer update

Gathering patches for root package.
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-sales (102.0.2): Loading from cache
  - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)
    patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch (Digital Giftcards not sending to svs #1273)

magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

    new file:   patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock

➜  mag-2-3-2 git:(develop) ✗ git add -A
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Digital Giftcards not sending to svs #1273"
[develop 3bac6694] Digital Giftcards not sending to svs #1273
 3 files changed, 18 insertions(+), 3 deletions(-)
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
➜  mag-2-3-2 git:(develop) git push origin develop
Counting objects: 7, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (7/7), done.
Writing objects: 100% (7/7), 1.14 KiB | 1.14 MiB/s, done.
Total 7 (delta 5), reused 0 (delta 0)
remote: Resolving deltas: 100% (5/5), completed with 5 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   be4e67b8..3bac6694  develop -> develop
➜  mag-2-3-2 git:(develop) magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
The directory '/Users/bclemi/Projects/mag-2-3-2/generated/metadata/' doesn't exist - skipping cleanup
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Upgrading schema..
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Upgrading data..
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(develop) ✗ magento setup:di:compile
Compilation was started.
Proxies code generation... 0/7 [>]   0% < 1 Proxies code generation... 1/7 [>]  14% 1 seRepositories code generation... 1/7 [>]  14%Repositories code generation... 2/7 [>]  28%Service data attributes generation... 2/7 [>Service data attributes generation... 3/7 [>Application code generator... 3/7 [>]  42% 2Application code generator... 4/7 [>]  57% 4Interceptors generation... 4/7 [>]  57% 46 sInterceptors generation... 5/7 [>]  71% 1 miArea configuration aggregation... 5/7 [>]  7Area configuration aggregation... 6/7 [>]  8Interception cache generation... 6/7 [>]  85Interception cache generation... 7/7 [=] 100Interception cache generation... 7/7 [=] 100% 2 mins 460.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(develop) ✗ magento c:f
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
target_rule
full_page
config_integration
config_integration_api
translate
config_webservice
ec_cache
➜  mag-2-3-2 git:(develop) ✗ git checkout master
M   app/etc/config.php
M   lib/web/jquery/jquery-ui.js
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) ✗ git checkout develop
M   app/etc/config.php
M   lib/web/jquery/jquery-ui.js
Switched to branch 'develop'
Your branch is up to date with 'origin/develop'.
➜  mag-2-3-2 git:(develop) ✗ git add app/etc/config.php
➜  mag-2-3-2 git:(develop) ✗ git commit -m "develop composer update"
[develop 3bc1ce9c] develop composer update
 1 file changed, 1 insertion(+), 1 deletion(-)
➜  mag-2-3-2 git:(develop) ✗ git push origin develop
Counting objects: 5, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (5/5), done.
Writing objects: 100% (5/5), 443 bytes | 443.00 KiB/s, done.
Total 5 (delta 4), reused 0 (delta 0)
remote: Resolving deltas: 100% (4/4), completed with 4 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   3bac6694..3bc1ce9c  develop -> develop
➜  mag-2-3-2 git:(develop) ✗ git checkout master
M   lib/web/jquery/jquery-ui.js
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) ✗ git stash
Saved working directory and index state WIP on master: dae56d62 new products added not pulling through in categories (FSM-2807)
➜  mag-2-3-2 git:(master) git checkout -b feature-850
Switched to a new branch 'feature-850'
➜  mag-2-3-2 git:(feature-850) composer update
Gathering patches for root package.
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 3 installs, 2 updates, 1 removal
  - Removing attraqt/locayta-details (1.0.7)
Removing Attraqt/LocaytaDetails
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-sales (102.0.2): Loading from cache
  - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)

  - Installing magento/module-payment (100.3.2): Loading from cache
  - Updating adyen/module-payment (4.5.1 => 4.4.0): Downloading (100%)
  - Applying patches for adyen/module-payment
    patches/ADYEN_HIDE_HPP_GIFTCARDS_2.3.2_COMPOSER.patch (Do not show HPP payments if a Gift Card is in the order #1232)

  - Updating paulsmithltd/magento2-customer (dev-feature-1288 9d3bd6b => v2.0.0):  Checking out 731c3ee15b
  - Installing attraqt/attraqt-details (v1.0.2): Downloading (100%)   magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(feature-850) ✗ git status
On branch feature-850
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(feature-850) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating paulsmithltd/magento2-theme-bicycle (v5.0.1 => dev-feature-850 84f6b1b):  Checking out 84f6b1b880
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(feature-850) ✗ git status
On branch feature-850
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(feature-850) ✗ git add composer.json
➜  mag-2-3-2 git:(feature-850) ✗ git add composer.lock
➜  mag-2-3-2 git:(feature-850) ✗ git commit -m "style guide update"
[feature-850 5cd5ad87] style guide update
 2 files changed, 45 insertions(+), 37 deletions(-)
➜  mag-2-3-2 git:(feature-850) git push origin feature-850
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 1.10 KiB | 160.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas:   0% (0/3remote: Resolving deltas:  33% (1/3remote: Resolving deltas:  66% (2/3remote: Resolving deltas: 100% (3/3remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
remote:
remote: Create a pull request for 'feature-850' on GitHub by visiting:
remote:      https://github.com/paulsmithltd/paulsmith.com/pull/new/feature-850
remote:
To github.com:paulsmithltd/paulsmith.com.git
 * [new branch]        feature-850 -> feature-850
➜  mag-2-3-2 git:(feature-850) git checkout develop
Switched to branch 'develop'
Your branch is up to date with 'origin/develop'.
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 3 installs, 3 updates, 1 removal
  - Removing attraqt/attraqt-details (v1.0.2)
Removing Attraqt/AttraqtDetails
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-sales (102.0.2): Loading from cache
  - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)
    patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch (Digital Giftcards not sending to svs #1273)

  - Installing magento/module-payment (100.3.2): Loading from cache
  - Applying patches for magento/module-payment
    patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch (Payment Methods Missing from Order Grid #1254)

  - Updating adyen/module-payment (4.4.0 => 4.5.1): Loading from cache
  - Applying patches for adyen/module-payment
    patches/ADYEN_HIDE_HPP_GIFTCARDS_2.3.2_COMPOSER.patch (Do not show HPP payments if a Gift Card is in the order #1232)

  - Updating paulsmithltd/magento2-customer (v2.0.0 => dev-feature-1288 9d3bd6b):  Checking out 9d3bd6b045
  - Updating paulsmithltd/magento2-theme-bicycle (dev-feature-850 84f6b1b => v5.0.1):  Checking out 2ff1d73387
  - Installing attraqt/locayta-details (1.0.7): Loading from cache
magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
➜  mag-2-3-2 git:(develop) magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
The directory '/Users/bclemi/Projects/mag-2-3-2/generated/metadata/' doesn't exist - skipping cleanup
/Users/bclemi/Projects/mag-2-3-2/pub/static/_cache
/Users/bclemi/Projects/mag-2-3-2/pub/static/deployed_version.txt
/Users/bclemi/Projects/mag-2-3-2/pub/static/frontend
/Users/bclemi/Projects/mag-2-3-2/var/view_preprocessed/pub
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(develop) magento setup:di:compile
Compilation was started.
Repositories code generation... 1/7 [>]  14% < 1 sec 88.0 Repositories code generation... 2/7 [>]  28% 16 secs 236.0Service data attributes generation... 2/7 [>]  28% 16 secsService data attributes generation... 3/7 [>]  42% 16 secsApplication code generator... 3/7 [>]  42% 16 secs 236.0 MApplication code generator... 4/7 [>]  57% 33 secs 260.0 MArea configuration aggregation... 5/7 [>]  71% 1 min 342.0Area configuration aggregation... 6/7 [>]  85% 1 min 458.0Interception cache generation... 6/7 [>]  85% 1 min 458.0 Interception cache generation... 7/7 [=] 100% 2 mins 458.0Interception cache generation... 7/7 [=] 100% 2 mins 458.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(develop) magento setup:di:compile
Compilation was started.
Repositories code generation... 1/7 [>]  14% 1 sec 88.0 MiRepositories code generation... 2/7 [>]  28% 18 secs 236.0Service data attributes generation... 2/7 [>]  28% 18 secsService data attributes generation... 3/7 [>]  42% 18 secsApplication code generator... 3/7 [>]  42% 18 secs 236.0 MApplication code generator... 4/7 [>]  57% 33 secs 260.0 MArea configuration aggregation... 5/7 [>]  71% 1 min 342.0Area configuration aggregation... 6/7 [>]  85% 1 min 462.0Interception cache generation... 6/7 [>]  85% 1 min 462.0 Interception cache generation... 7/7 [=] 100% 1 min 460.0 Interception cache generation... 7/7 [=] 100% 1 min 460.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(develop) ✗ magento c:f
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
target_rule
full_page
config_integration
config_integration_api
translate
config_webservice
ec_cache
➜  mag-2-3-2 git:(develop) ✗ magento c:f
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
target_rule
full_page
config_integration
config_integration_api
translate
config_webservice
ec_cache
➜  mag-2-3-2 git:(develop) ✗ magento c:f
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
target_rule
full_page
config_integration
config_integration_api
translate
config_webservice
ec_cache
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   lib/web/jquery/jquery-ui.js

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 2 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating monolog/monolog (1.24.0 => 1.25.1): Downloading (100%)
  - Updating paulsmithltd/magento2-theme-bicycle (v5.0.1 => dev-feature-1295 5a553e8):  Checking out 5a553e862f
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock
    modified:   lib/web/jquery/jquery-ui.js

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.json
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Upgrade Adyen 4.5.1 #1295"
[develop ea6af8bf] Upgrade Adyen 4.5.1 #1295
 2 files changed, 24 insertions(+), 16 deletions(-)
➜  mag-2-3-2 git:(develop) ✗ git push origin develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 893 bytes | 893.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   3bc1ce9c..ea6af8bf  develop -> develop
➜  mag-2-3-2 git:(develop) ✗ git checkout master
M   lib/web/jquery/jquery-ui.js
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) ✗ composer update
Gathering patches for root package.
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 3 installs, 3 updates, 1 removal
  - Removing attraqt/locayta-details (1.0.7)
Removing Attraqt/LocaytaDetails
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-sales (102.0.2): Loading from cache
  - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)

  - Installing magento/module-payment (100.3.2): Loading from cache
  - Updating adyen/module-payment (4.5.1 => 4.4.0): Loading from cache
  - Applying patches for adyen/module-payment
    patches/ADYEN_HIDE_HPP_GIFTCARDS_2.3.2_COMPOSER.patch (Do not show HPP payments if a Gift Card is in the order #1232)

  - Updating paulsmithltd/magento2-customer (dev-feature-1288 9d3bd6b => v2.0.0):  Checking out 731c3ee15b
  - Updating paulsmithltd/magento2-theme-bicycle (dev-feature-1295 5a553e8 => v5.0.1):  Checking out 2ff1d73387
  - Installing attraqt/attraqt-details (v1.0.2): Loading from cache
magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(master) ✗ magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
The directory '/Users/bclemi/Projects/mag-2-3-2/generated/metadata/' doesn't exist - skipping cleanup
/Users/bclemi/Projects/mag-2-3-2/pub/static/_cache
/Users/bclemi/Projects/mag-2-3-2/pub/static/adminhtml
/Users/bclemi/Projects/mag-2-3-2/pub/static/deployed_version.txt
/Users/bclemi/Projects/mag-2-3-2/pub/static/frontend
/Users/bclemi/Projects/mag-2-3-2/var/view_preprocessed/pub
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'Attraqt_Attraqt':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_AffiliateReturns':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(master) ✗ magento setup:di:compile
Compilation was started.
Interception cache generation... 7/7 [===========] 100% 2 mins 460.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(master) ✗ composer install --prefer-source
Gathering patches for root package.
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 1 install, 0 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-checkout (100.3.2): Downloading (100%)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
➜  mag-2-3-2 git:(master) ✗ git checkout develop
error: Your local changes to the following files would be overwritten by checkout:
    composer.lock
Please commit your changes or stash them before you switch branches.
Aborting
➜  mag-2-3-2 git:(master) ✗ git stash composer.lock
usage: git stash list [<options>]
   or: git stash show [<stash>]
   or: git stash drop [-q|--quiet] [<stash>]
   or: git stash ( pop | apply ) [--index] [-q|--quiet] [<stash>]
   or: git stash branch <branchname> [<stash>]
   or: git stash save [--patch] [-k|--[no-]keep-index] [-q|--quiet]
              [-u|--include-untracked] [-a|--all] [<message>]
   or: git stash [push [--patch] [-k|--[no-]keep-index] [-q|--quiet]
               [-u|--include-untracked] [-a|--all] [-m <message>]
               [-- <pathspec>...]]
   or: git stash clear
➜  mag-2-3-2 git:(master) ✗ git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(master) ✗ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

    new file:   patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
    new file:   patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock
    modified:   lib/web/jquery/jquery-ui.js
    modified:   patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
    modified:   patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch

➜  mag-2-3-2 git:(master) ✗ git checkout composer.lock
➜  mag-2-3-2 git:(master) ✗ git checkout develop
M   lib/web/jquery/jquery-ui.js
A   patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
A   patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
Switched to branch 'develop'
Your branch is up to date with 'origin/develop'.
➜  mag-2-3-2 git:(develop) ✗ composer update
Gathering patches for root package.
Removing package magento/module-checkout so that it can be re-installed and re-patched.
  - Removing magento/module-checkout (100.3.2)
Removing package magento/module-payment so that it can be re-installed and re-patched.
  - Removing magento/module-payment (100.3.2)
Removing package magento/module-sales so that it can be re-installed and re-patched.
  - Removing magento/module-sales (102.0.2)
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 4 installs, 3 updates, 1 removal
  - Removing attraqt/attraqt-details (v1.0.2)
Removing Attraqt/AttraqtDetails
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Installing magento/module-sales (102.0.2): Loading from cache
  - Applying patches for magento/module-sales
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_ADJUSTMENT_BLOCK_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Adjustment Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Block) #1269)
    patches/module-sales/CREDIT_MEMO_UPDATE_TOTAL_BUTTON_MISSING_CREATE_ITEMS_TEMPLATE_2_3_2_COMPOSER.patch (Manual Refund Unable to Update Total (Create Items Template File) #1269)
    patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch (Digital Giftcards not sending to svs #1273)

  - Installing magento/module-payment (100.3.2): Loading from cache
  - Applying patches for magento/module-payment
    patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch (Payment Methods Missing from Order Grid #1254)

  - Installing magento/module-checkout (100.3.2): Loading from cache
  - Applying patches for magento/module-checkout
    patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch (Add Logging to Guest Payment information)
    patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch (Add Logging to Payment information)

  - Updating adyen/module-payment (4.4.0 => 4.5.1): Loading from cache
  - Applying patches for adyen/module-payment
    patches/ADYEN_HIDE_HPP_GIFTCARDS_2.3.2_COMPOSER.patch (Do not show HPP payments if a Gift Card is in the order #1232)

  - Updating paulsmithltd/magento2-customer (v2.0.0 => dev-feature-1288 9d3bd6b):  Checking out 9d3bd6b045
  - Updating paulsmithltd/magento2-theme-bicycle (v5.0.1 => dev-feature-1295 5a553e8):  Checking out 5a553e862f
  - Installing attraqt/locayta-details (1.0.7): Loading from cache
magento/module-sales suggests installing magento/module-sales-sample-data (Sample Data version: 100.3.*)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

    new file:   patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
    new file:   patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock
    modified:   lib/web/jquery/jquery-ui.js
    modified:   patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
    modified:   patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch

➜  mag-2-3-2 git:(develop) ✗ git add -composer.json
error: unknown switch `c'
usage: git add [<options>] [--] <pathspec>...

    -n, --dry-run         dry run
    -v, --verbose         be verbose

    -i, --interactive     interactive picking
    -p, --patch           select hunks interactively
    -e, --edit            edit current diff and apply
    -f, --force           allow adding otherwise ignored files
    -u, --update          update tracked files
    --renormalize         renormalize EOL of tracked files (implies -u)
    -N, --intent-to-add   record only the fact that the path will be added later
    -A, --all             add changes from all tracked and untracked files
    --ignore-removal      ignore paths removed in the working tree (same as --no-all)
    --refresh             don't add, only refresh the index
    --ignore-errors       just skip files which cannot be added because of errors
    --ignore-missing      check if - even missing - files are ignored in dry run
    --chmod <(+/-)x>      override the executable bit of the listed files

➜  mag-2-3-2 git:(develop) ✗ git add composer.json
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git add patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
➜  mag-2-3-2 git:(develop) ✗ git add patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

    modified:   composer.json
    modified:   composer.lock
    new file:   patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
    new file:   patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   lib/web/jquery/jquery-ui.js

➜  mag-2-3-2 git:(develop) ✗ got commit -m "Add logging to payment information for duplicate payments"
zsh: command not found: got
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Add logging to payment information for duplicate payments"
[develop 66d241d2] Add logging to payment information for duplicate payments
 4 files changed, 93 insertions(+), 1 deletion(-)
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
➜  mag-2-3-2 git:(develop) ✗ git push origin develop
Counting objects: 8, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (8/8), done.
Writing objects: 100% (8/8), 2.10 KiB | 1.05 MiB/s, done.
Total 8 (delta 5), reused 0 (delta 0)
remote: Resolving deltas: 100% (5/5), completed with 4 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   ea6af8bf..66d241d2  develop -> develop
➜  mag-2-3-2 git:(develop) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 0 updates, 1 removal
  - Removing paulsmithltd/magento2-affiliate-returns (v1.0.1)
    The package has modified files:
    M Observer/CreditMemoDataAssignObserver.php
    Discard changes [y,n,v,d,?]? y
Removing Paulsmithltd/Magento2AffiliateReturns
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock
    modified:   lib/web/jquery/jquery-ui.js

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.json
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Remove affiliates returns module #1293"
[develop b69b49cc] Remove affiliates returns module #1293
 2 files changed, 1 insertion(+), 49 deletions(-)
➜  mag-2-3-2 git:(develop) ✗ git push origin develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 477 bytes | 477.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To github.com:paulsmithltd/paulsmith.com.git
   66d241d2..b69b49cc  develop -> develop
➜  mag-2-3-2 git:(develop) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 2 updates, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
pick 447b1c33 Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wi  - Updating paulsmithltd/magento2-customer (dev-feature-1288 9d3bd6b => v2.0.1):  Checking out 9d3bd6b045
  - Updating paulsmithltd/magento2-theme-bicycle (dev-feature-1295 5a553e8 => v5.0.2):  Checking out 5a553e862f
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
\On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.json
    modified:   composer.lock
    modified:   lib/web/jquery/jquery-ui.js

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git add composer.json
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Add Logging to payment"
[develop 6e89a0c4] Add Logging to payment
 2 files changed, 12 insertions(+), 21 deletions(-)
➜  mag-2-3-2 git:(develop) ✗ git push origin develop
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 726 bytes | 726.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
To github.com:paulsmithltd/paulsmith.com.git
   b69b49cc..6e89a0c4  develop -> develop
➜  mag-2-3-2 git:(develop) ✗ git rebase -i HEAD~8
Cannot rebase: You have unstaged changes.
Please commit or stash them.
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch is up to date with 'origin/develop'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   lib/web/jquery/jquery-ui.js

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git stash
Saved working directory and index state WIP on develop: 6e89a0c4 Add Logging to payment
➜  mag-2-3-2 git:(develop) git rebase -i HEAD~8
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
Auto-merging composer.json
error: could not apply d5b61f15... Payment Methods Missing from Order Grid #1254

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

Could not apply d5b61f15... Payment Methods Missing from Order Grid #1254
➜  mag-2-3-2 git:(447b1c33) ✗ git rebase --continue
[detached HEAD ac4e18ff] Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288 Payment Methods Missing from Order Grid #1254
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
 Date: Thu Sep 5 13:46:10 2019 +0100
 3 files changed, 129 insertions(+), 327 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Auto-merging composer.json
error: could not apply 3bac6694... Digital Giftcards not sending to svs #1273

Resolve all conflicts manually, mark them as resolved with
Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

Could not apply 3bac6694... Digital Giftcards not sending to svs #1273
➜  mag-2-3-2 git:(ac4e18ff) ✗ git rebase --continue
[detached HEAD 0df701db] Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288 Payment Methods Missing from Order Grid #1254 Digital Giftcards not sending to svs #1273
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
 Date: Thu Sep 5 13:46:10 2019 +0100
 4 files changed, 144 insertions(+), 328 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Auto-merging composer.json
error: could not apply ea6af8bf... Upgrade Adyen 4.5.1 #1295

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
Could not apply ea6af8bf... Upgrade Adyen 4.5.1 #1295
➜  mag-2-3-2 git:(d9fcc537) ✗ git rebase --continue
[detached HEAD 43f9bd6f] Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288 Payment Methods Missing from Order Grid #1254 Digital Giftcards not sending to svs #1273 Upgrade Adyen 4.5.1 #1295
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
 Date: Thu Sep 5 13:46:10 2019 +0100
 5 files changed, 146 insertions(+), 330 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Auto-merging composer.json
error: could not apply 66d241d2... Add logging to payment information for duplicate payments

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

Could not apply 66d241d2... Add logging to payment information for duplicate payments
➜  mag-2-3-2 git:(43f9bd6f) ✗ git rebase --continue
[detached HEAD a2905a56] Attraqt Rollback v1.0.7, Cannot View More than 10 ItemAttraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
s in the Wishlist #1288 Payment Methods Missing from Order Grid #1254 Digital Giftcards not sending to svs #1273 Upgrade Adyen 4.5.1 #1295 Add logging to payment information for duplicate payments
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
 Date: Thu Sep 5 13:46:10 2019 +0100
 7 files changed, 232 insertions(+), 330 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Auto-merging composer.json
error: could not apply b69b49cc... Remove affiliates returns module #1293

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

Could not apply b69b49cc... Remove affiliates returns module #1293
➜  mag-2-3-2 git:(a2905a56) ✗ git rebase --continue
[detached HEAD 54fd4d3c] Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288 Payment Methods Missing from Order Grid #1254 Digital Giftcards not sending to svs #1273 Upgrade Adyen 4.5.1 #1295 Add logging to payment information for duplicate payments Remove affiliates returns module #1293
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
 Date: Thu Sep 5 13:46:10 2019 +0100
 7 files changed, 232 insertions(+), 331 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Auto-merging composer.json
error: could not apply 6e89a0c4... Add Logging to payment

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

Could not apply 6e89a0c4... Add Logging to payment
➜  mag-2-3-2 git:(54fd4d3c) ✗ git rebase --continue
[detached HEAD 7ce7dda6] Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288 Payment Methods Missing from Order Grid #1254 Digital Giftcards not sending to svs #1273 Upgrade Adyen 4.5.1 #1295 Add logging to payment information for duplicate payments Remove affiliates returns module #1293
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
pick 7ce7dda6 Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the WiAttraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288
 Date: Thu Sep 5 13:46:10 2019 +0100
 7 files changed, 232 insertions(+), 331 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
Successfully rebased and updated refs/heads/develop.
➜  mag-2-3-2 git:(develop) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating adyen/module-payment (4.5.1 => 4.4.0): Loading from cache
  - Applying patches for adyen/module-payment
    patches/ADYEN_HIDE_HPP_GIFTCARDS_2.3.2_COMPOSER.patch (Do not show HPP payments if a Gift Card is in the order #1232)

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(develop) ✗ git status
On branch develop
Your branch and 'origin/develop' have diverged,
and have 1 and 9 different commits each, respectively.
  (use "git pull" to merge the remote branch into yours)

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

    modified:   composer.lock

no changes added to commit (use "git add" and/or "git commit -a")
➜  mag-2-3-2 git:(develop) ✗ git add composer.lock
➜  mag-2-3-2 git:(develop) ✗ git commit -m "Composer update"
[develop 27427c85] Composer update
 1 file changed, 316 insertions(+), 121 deletions(-)
➜  mag-2-3-2 git:(develop) git push origin -f develop
Counting objects: 17, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (17/17), done.
Writing objects: 100% (17/17), 7.62 KiB | 390.00 KiB/s, done.
Total 17 (delta 11), reused 0 (delta 0)
remote: Resolving deltas: 100% (11/11), completed with 8 local objects.
To github.com:paulsmithltd/paulsmith.com.git
 + 6e89a0c4...27427c85 develop -> develop (forced update)
➜  mag-2-3-2 git:(develop) git rebase -i HEAD~2
[detached HEAD bd1ce600] Attraqt Rollback v1.0.7, Cannot View More than 10 Items in the Wishlist #1288 Payment Methods Missing from Order Grid #1254 Digital Giftcards not sending to svs #1273 Upgrade Adyen 4.5.1 #1295 Add logging to payment information for duplicate payments Remove affiliates returns module #1293
 Author: Nish Patel <nish.patel@paulsmith.co.uk>
 Date: Thu Sep 5 13:46:10 2019 +0100
 7 files changed, 210 insertions(+), 114 deletions(-)
 create mode 100644 patches/ADMIN_PAYMENT_METHODS_2.3.2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_GUEST_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-checkout/CHECKOUT_ADD_LOGGING_PAYMENT_INFORMATION_2_3_2_COMPOSER.patch
 create mode 100644 patches/module-sales/PRODUCT_BUY_INFOREQUEST_ERROR_2.3.2_COMPOSER.patch
Successfully rebased and updated refs/heads/develop.
➜  mag-2-3-2 git:(develop) git push origin -f develop
Counting objects: 14, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (14/14), done.
Writing objects: 100% (14/14), 4.73 KiB | 538.00 KiB/s, done.
Total 14 (delta 9), reused 0 (delta 0)
remote: Resolving deltas: 100% (9/9), completed with 8 local objects.
To github.com:paulsmithltd/paulsmith.com.git
 + 27427c85...bd1ce600 develop -> develop (forced update)
➜  mag-2-3-2 git:(develop) git checkout feature-187
Switched to branch 'feature-187'
➜  mag-2-3-2 git:(feature-187) git rebase master
First, rewinding head to replay your work on top of it...
Generating patches: 100% (3/3), done.
Applying: magento 2.3.2 upgrade
Using index info to reconstruct a base tree...
M   .travis.yml
M   app/autoload.php
M   app/bootstrap.php
M   app/etc/NonComposerComponentRegistration.php
M   app/etc/config.php
M   app/etc/di.xml
M   app/functions.php
M   composer.json
M   composer.lock
M   dev/tests/acceptance/.gitignore
M   dev/tests/acceptance/tests/_bootstrap.php
M   dev/tests/acceptance/tests/_data/svg.svg
M   dev/tests/api-functional/_files/Magento/TestModule1/Controller/CookieTester.php
M   dev/tests/api-functional/_files/Magento/TestModule1/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModule2/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModule3/Service/V1/Entity/Parameter.php
M   dev/tests/api-functional/_files/Magento/TestModule3/Service/V1/Entity/WrappedErrorParameter.php
M   dev/tests/api-functional/_files/Magento/TestModule3/Service/V1/Error.php
M   dev/tests/api-functional/_files/Magento/TestModule3/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModule4/Service/V1/DataObjectServiceInterface.php
M   dev/tests/api-functional/_files/Magento/TestModule4/Service/V1/Entity/ExtensibleRequest.php
M   dev/tests/api-functional/_files/Magento/TestModule4/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModule5/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModuleDefaultHydrator/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModuleIntegrationFromConfig/composer.json
M   dev/tests/api-functional/_files/Magento/TestModuleIntegrationFromConfig/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModuleJoinDirectives/composer.json
M   dev/tests/api-functional/_files/Magento/TestModuleJoinDirectives/etc/module.xml
M   dev/tests/api-functional/_files/Magento/TestModuleMSC/Model/Data/CustomAttributeDataObject.php
M   dev/tests/api-functional/_files/Magento/TestModuleMSC/Model/Data/CustomAttributeNestedDataObject.php
M   dev/tests/api-functional/_files/Magento/TestModuleMSC/Model/Data/Eav/AttributeMetadata.php
M   dev/tests/api-functional/_files/Magento/TestModuleMSC/Model/Data/Item.php
M   dev/tests/api-functional/_files/Magento/TestModuleMSC/etc/di.xml
M   dev/tests/api-functional/_files/Magento/TestModuleMSC/etc/module.xml
M   dev/tests/api-functional/framework/Magento/TestFramework/Annotation/ApiDataFixture.php
M   dev/tests/api-functional/framework/Magento/TestFramework/TestCase/Webapi/Adapter/Rest.php
M   dev/tests/api-functional/framework/Magento/TestFramework/TestCase/Webapi/Adapter/Soap.php
M   dev/tests/api-functional/framework/Magento/TestFramework/TestCase/WebapiAbstract.php
M   dev/tests/api-functional/framework/bootstrap.php
M   dev/tests/api-functional/testsuite/Magento/Analytics/Api/LinkProviderTest.php
M   dev/tests/api-functional/testsuite/Magento/Bundle/Api/ProductOptionRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Bundle/Api/ProductServiceTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/AttributeSetManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/AttributeSetRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/CategoryManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/CategoryRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductAttributeManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductAttributeMediaGalleryManagementInterfaceTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductAttributeOptionManagementInterfaceTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductAttributeRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductCustomOptionRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductMediaAttributeManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductRepositoryInterfaceTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductSwatchAttributeOptionManagementInterfaceTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/ProductTierPriceManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/_files/product_options_negative.php
M   dev/tests/api-functional/testsuite/Magento/Catalog/Api/_files/product_options_update_negative.php
M   dev/tests/api-functional/testsuite/Magento/CatalogInventory/Api/ProductRepositoryInterfaceTest.php
M   dev/tests/api-functional/testsuite/Magento/CatalogInventory/Api/StockItemTest.php
M   dev/tests/api-functional/testsuite/Magento/CatalogInventory/Api/StockStatusTest.php
M   dev/tests/api-functional/testsuite/Magento/CheckoutStaging/Api/GuestPaymentInformationManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/CheckoutStaging/Api/PaymentInformationManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Cms/Api/PageRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/ConfigurableProduct/Api/CartItemRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/ConfigurableProduct/Api/LinkManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/ConfigurableProduct/Api/OptionRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/ConfigurableProduct/Api/ProductRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Customer/Api/AccountManagementMeTest.php
M   dev/tests/api-functional/testsuite/Magento/Customer/Api/AccountManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Customer/Api/AddressRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Customer/Api/CustomerMetadataTest.php
M   dev/tests/api-functional/testsuite/Magento/Customer/Api/CustomerRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Customer/Api/GroupRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Downloadable/Api/LinkRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Downloadable/Api/ProductRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Downloadable/Api/SampleRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Eav/Api/AttributeSetManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Eav/Api/AttributeSetRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Framework/Model/Entity/HydratorTest.php
M   dev/tests/api-functional/testsuite/Magento/Framework/Stdlib/CookieManagerTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftMessage/Api/CartRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftMessage/Api/GuestCartRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftMessage/Api/GuestItemRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftMessage/Api/ItemRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftWrapping/Api/MessageCartRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftWrapping/Api/MessageGuestCartRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftWrapping/Api/MessageGuestItemRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftWrapping/Api/MessageItemRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/GiftWrapping/Api/WrappingRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Integration/Model/AdminTokenServiceTest.php
M   dev/tests/api-functional/testsuite/Magento/Integration/Model/CustomerTokenServiceTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/CartManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/CartTotalRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/CouponManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/GuestCartManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/GuestCartTotalRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/GuestCouponManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/GuestPaymentMethodManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Quote/Api/PaymentMethodManagementTest.php
M   dev/tests/api-functional/testsuite/Magento/Rma/Service/V1/RmaReadTest.php
M   dev/tests/api-functional/testsuite/Magento/Rma/Service/V1/RmaWriteTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/CreditmemoCreateTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/OrderGetTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/OrderInvoiceCreateTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/OrderItemGetTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/OrderListTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/OrderStatusHistoryAddTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/RefundOrderTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/ShipOrderTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/ShipmentAddTrackTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/ShipmentCreateTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/ShipmentGetTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/ShipmentLabelGetTest.php
M   dev/tests/api-functional/testsuite/Magento/Sales/Service/V1/ShipmentListTest.php
M   dev/tests/api-functional/testsuite/Magento/Store/Api/GroupRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Store/Api/StoreConfigManagerTest.php
M   dev/tests/api-functional/testsuite/Magento/Store/Api/StoreRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Store/Api/WebsiteRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Tax/Api/TaxClassRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Tax/Api/TaxRateRepositoryTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/DeserializationTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/JoinDirectivesTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/JsonGenerationFromDataObjectTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/Routing/BaseService.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/Routing/CoreRoutingTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/Routing/RestErrorHandlingTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/Routing/SoapErrorHandlingTest.php
M   dev/tests/api-functional/testsuite/Magento/Webapi/WsdlGenerationFromDataObjectTest.php
M   dev/tests/functional/.gitignore
M   dev/tests/functional/bootstrap.php
M   dev/tests/functional/composer.json
M   dev/tests/functional/etc/config.xml.dist
M   dev/tests/functional/etc/events.xml
M   dev/tests/functional/lib/Magento/Mtf/App/State/State1.php
M   dev/tests/functional/lib/Magento/Mtf/Client/Element/ConditionsElement.php
M   dev/tests/functional/lib/Magento/Mtf/Client/Element/DatepickerElement.php
M   dev/tests/functional/lib/Magento/Mtf/Constraint/AbstractAssertForm.php
M   dev/tests/functional/lib/Magento/Mtf/EntryPoint/EntryPoint.php
M   dev/tests/functional/lib/Magento/Mtf/Troubleshooting/AdminAnalyzer.php
M   dev/tests/functional/lib/Magento/Mtf/Troubleshooting/HtaccessAnalyzer.php
M   dev/tests/functional/lib/Magento/Mtf/Troubleshooting/StorefrontAnalyzer.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Command/File/Export.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Command/File/Export/Reader.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Command/File/Log.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Generate/Factory.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Generate/Factory/AbstractFactory.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Generate/Fixture/FieldsProvider.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Generate/Fixture/SchemaXml.php
M   dev/tests/functional/lib/Magento/Mtf/Util/ModuleResolver/SequenceSorter.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Protocol/CurlTransport/BackendDecorator.php
M   dev/tests/functional/lib/Magento/Mtf/Util/Protocol/CurlTransport/FrontendDecorator.php
M   dev/tests/functional/phpunit.xml.dist
M   dev/tests/functional/tests/app/Magento/AdminGws/Test/Constraint/AssertAdminGwsCategoryAccess.php
M   dev/tests/functional/tests/app/Magento/AdminGws/Test/Constraint/AssertAdminGwsCustomers.php
M   dev/tests/functional/tests/app/Magento/AdminGws/Test/Constraint/AssertAdminGwsProducts.php
M   dev/tests/functional/tests/app/Magento/AdminGws/Test/Constraint/AssertAdminGwsSales.php
M   dev/tests/functional/tests/app/Magento/AdminGws/Test/Constraint/AssertAdminGwsSalesGrid.php
M   dev/tests/functional/tests/app/Magento/AdminNotification/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertMaxRequestedQtyFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertMinRequestedQtyFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertMsrpNotice.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductConfiguringFromRequiringAttention.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductIsOutOfStockFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductRequiredAttentionFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductTierPriceMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductWithPaymentAgreementsOrderFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAbsentInRequiringAttention.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendActualNumberInQtyFieldNoticeMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendIsDisabledFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendIsOutOfStockFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendMaxRequestedQtyFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendMinRequestedQtyFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendProductQtyIsNotEnough.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendQtyIncrementsFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendRequiredAttentionFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendSkuNotFound.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendSpecifyProductOptionsLink.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuOnBackendSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertProductsAddBySkuSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertQtyIncrementsFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertQtyIsNotEnoughFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertRequiringAttentionProductSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertSkuNotFoundFailMessage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertSpecifyProductOptionsLink.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/Constraint/AssertWidgetOrderBySkuOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/TestCase/AddProductsToCartBySkuFromBackendTest.xml
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/TestCase/AddProductsToCartBySkuFromCustomerAccountTest.xml
M   dev/tests/functional/tests/app/Magento/AdvancedCheckout/Test/TestCase/AddProductsToCartBySkuFromWidgetTest.xml
M   dev/tests/functional/tests/app/Magento/AdvancedPricingImportExport/Test/Constraint/AssertExportAdvancedPricing.php
M   dev/tests/functional/tests/app/Magento/AdvancedPricingImportExport/Test/Constraint/AssertImportAdvancedPricing.php
M   dev/tests/functional/tests/app/Magento/AdvancedPricingImportExport/Test/TestCase/ExportAdvancedPricingTest.php
M   dev/tests/functional/tests/app/Magento/AdvancedPricingImportExport/Test/TestCase/ExportAdvancedPricingTest.xml
M   dev/tests/functional/tests/app/Magento/AdvancedPricingImportExport/Test/TestCase/ImportDataNegativeTest.xml
M   dev/tests/functional/tests/app/Magento/AdvancedPricingImportExport/Test/_files/template/pricing/advanced_incorrect.php
M   dev/tests/functional/tests/app/Magento/Analytics/Test/Constraint/AssertAdvancedReportingPage.php
M   dev/tests/functional/tests/app/Magento/Analytics/Test/Constraint/AssertBIEssentialsLink.php
M   dev/tests/functional/tests/app/Magento/Analytics/Test/Constraint/AssertConfigAnalyticsDisabled.php
M   dev/tests/functional/tests/app/Magento/Analytics/Test/Constraint/AssertConfigAnalyticsEnabled.php
M   dev/tests/functional/tests/app/Magento/Analytics/Test/TestCase/AdvancedReportingButtonTest.xml
M   dev/tests/functional/tests/app/Magento/Analytics/Test/TestCase/InstallTest.xml
M   dev/tests/functional/tests/app/Magento/Analytics/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/Block/Sandbox/AuthorizenetLogin.xml
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/Block/Sandbox/Menu.php
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/Block/Sandbox/SearchForm.php
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/Block/Sandbox/TransactionsGrid.php
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/Constraint/AssertCreditCardNumberOnOnePageCheckout.php
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/Page/Sandbox/Main.xml
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/TestCase/OnePageCheckoutDeclinedTest.xml
M   dev/tests/functional/tests/app/Magento/Authorizenet/Test/TestStep/AcceptTransactionOnAuthorizenetStep.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Block/Version.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertAdminLoginPageIsAvailable.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertBackendPageIsAvailable.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertBestsellersOnDashboard.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertDeveloperSectionVisibility.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertGlobalSearchCustomerName.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertGlobalSearchNoRecordsFound.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertGlobalSearchOrderId.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertGlobalSearchPreview.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertGlobalSearchProductName.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertHttpUsedOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertHttpsHeaderOptionsAvailable.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertHttpsHeaderOptionsNotAvailable.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertHttpsUsedOnBackend.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertInterfaceLocaleAvailableOptions.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertLocaleCodeVisibility.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertMenuItemNotVisible.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Constraint/AssertStoreCanBeLocalized.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Handler/Ui/LoginUser.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/Page/Adminhtml/Dashboard.xml
M   dev/tests/functional/tests/app/Magento/Backend/Test/Repository/ConfigData.xml
M   dev/tests/functional/tests/app/Magento/Backend/Test/TestCase/GlobalSearchEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Backend/Test/TestCase/LoginAfterJSMinificationTest.php
M   dev/tests/functional/tests/app/Magento/Backend/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Backup/Test/Constraint/AssertBackupInGrid.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Block/Adminhtml/Banner/BannerForm.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/Block/Adminhtml/Banner/Edit/Tab/RelatedPromotions.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Block/Adminhtml/Promo/CartPriceRulesGrid.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Block/Adminhtml/Promo/CatalogPriceRulesGrid.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerInGrid.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerMassDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerNotInCartRule.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerNotInCatalogRule.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerNotInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerNotInWidgetOptions.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerNotOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertBannerSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertWidgetBannerRotator.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertWidgetBannerRotatorOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Constraint/AssertWidgetBannerRotatorSeries.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Fixture/Banner/CustomerSegmentIds.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Handler/Banner/Curl.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Handler/BannerWidget/Curl.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Handler/Curl/CreateBanner.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Handler/Curl/UpdateBanner.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/Repository/Widget.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/Repository/Widget/Parameters.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/Repository/Widget/WidgetInstance.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/AssignCatalogRuleToBannerEntityTest.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/AssignCatalogRuleToBannerEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/AssignRelatedPromotionsToBannerEntityWithCustomerSegmentTest.php
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/AssignRelatedPromotionsToBannerEntityWithCustomerSegmentTest.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/CreateWidgetBannerTest.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/DeleteBannerEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/MassDeleteBannerEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Banner/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/BannerCustomerSegment/Test/Constraint/AssertBannerIsVisibleForCustomerSegment.php
M   dev/tests/functional/tests/app/Magento/BannerCustomerSegment/Test/Repository/Widget/Parameters.xml
M   dev/tests/functional/tests/app/Magento/BannerCustomerSegment/Test/TestCase/CreateWidgetBannerTest.xml
M   dev/tests/functional/tests/app/Magento/Braintree/Test/Block/Form/Secure3d.php
M   dev/tests/functional/tests/app/Magento/Braintree/Test/Constraint/Assert3dSecureInfoIsPresent.php
M   dev/tests/functional/tests/app/Magento/Braintree/Test/Constraint/AssertCreditCardJsValidationMessagesArePresent.php
M   dev/tests/functional/tests/app/Magento/Braintree/Test/Constraint/AssertDeviceDataIsPresentInBraintreeRequest.php
M   dev/tests/functional/tests/app/Magento/Braintree/Test/Constraint/AssertTransactionIsPresentInSettlementReport.php
M   dev/tests/functional/tests/app/Magento/Braintree/Test/TestCase/CreateOrderBackendTest.xml
M   dev/tests/functional/tests/app/Magento/Braintree/Test/TestCase/ReorderUsingVaultTest.xml
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Block/Adminhtml/Product/Composite/Configure.xml
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundleInCategory.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundleItemsOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundleItemsSummaryOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundleOptionTitleOnStorefront.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundleOptionsDeleted.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundlePriceCalculatedOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundlePriceType.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundlePriceView.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Constraint/AssertBundleProductOnConfigureCartPage.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Fixture/Cart/Item.php
M   dev/tests/functional/tests/app/Magento/Bundle/Test/Repository/BundleProduct.xml
M   dev/tests/functional/tests/app/Magento/Bundle/Test/TestCase/DeleteProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Bundle/Test/TestCase/UpdateBundleProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Bundle/Test/TestCase/ValidateOrderOfProductTypeTest.xml
M   dev/tests/functional/tests/app/Magento/BundleImportExport/Test/TestCase/ExportProductsTest.xml
M   dev/tests/functional/tests/app/Magento/Captcha/Test/Constraint/AssertCaptchaFieldOnBackend.php
M   dev/tests/functional/tests/app/Magento/Captcha/Test/Constraint/AssertCaptchaFieldOnContactUsForm.php
M   dev/tests/functional/tests/app/Magento/Captcha/Test/Constraint/AssertCaptchaFieldOnRegisterForm.php
M   dev/tests/functional/tests/app/Magento/Captcha/Test/Constraint/AssertCaptchaFieldOnStorefront.php
M   dev/tests/functional/tests/app/Magento/Captcha/Test/Page/ContactIndex.xml
M   dev/tests/functional/tests/app/Magento/Captcha/Test/TestCase/CaptchaEditCustomerTest.xml
M   dev/tests/functional/tests/app/Magento/Captcha/Test/TestCase/CaptchaOnAdminLoginTest.xml
M   dev/tests/functional/tests/app/Magento/Captcha/Test/TestCase/CaptchaOnContactUsTest.php
M   dev/tests/functional/tests/app/Magento/Captcha/Test/TestCase/CaptchaOnContactUsTest.xml
M   dev/tests/functional/tests/app/Magento/Captcha/Test/TestCase/CaptchaOnStoreFrontLoginTest.xml
M   dev/tests/functional/tests/app/Magento/Captcha/Test/TestCase/CaptchaOnStoreFrontRegisterTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Adminhtml/Category/Tree.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Adminhtml/Product/Edit/Section/Options.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Adminhtml/Product/Edit/Section/ProductDetails/NewCategoryIds.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Adminhtml/Product/ProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Product/Compare/ListCompare.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Product/Price.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Product/ProductList/TopToolbar.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Product/View.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Product/View/CustomOptions.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Block/Search.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAbsenceDeleteAttributeButton.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAddBeforeForPrice.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAddToCartButtonAbsent.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAddToCartButtonPresent.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAddedProductAttributeOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAdvancedPriceAbsentOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeOptionsOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetGroupOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertAttributeSetSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCanSaveProduct.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryAbsenceOnBackend.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryAbsenceOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryBreadcrumbs.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryCannotBeDeleted.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryForAssignedProducts.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryInNavigationMenu.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryIncludeInNavigationMenu.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryIsNotActive.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryMovedMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryNavigationMenu.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryNotInNavigationMenu.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryOnCustomStore.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryOnCustomWebsite.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryProductsGridFilter.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryRedirect.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategorySaveMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategorySuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCategoryWithCustomStoreOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertCustomOptions.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertDateInvalidErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertFileExtensionHints.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertImagesAreVisibleOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertMassProductUpdateSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertPaginationCorrectOnStoreFront.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAbsentCrossSells.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAbsentRelatedProducts.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAbsentUpSells.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeAbsenceInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeAbsenceInSearchOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeAbsenceInTemplateGroups.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeAbsenceInUnassignedAttributes.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeDisplayingOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeDisplayingOnSearchForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsComparable.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsFilterable.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsFilterableInSearch.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsGlobal.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsHtmlAllowed.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsRequired.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsUnique.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeIsUsedInSortOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAttributeSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductAutoincrementedSkuNoticeMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareBlockOnCmsPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareItemsLink.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareItemsLinkIsAbsent.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductComparePage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareRemoveLastProductMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareSuccessAddMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareSuccessRemoveAllProductsMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCompareSuccessRemoveMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCrossSells.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCustomOptionsErrors.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductCustomOptionsOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductDuplicateForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductDuplicateMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductDuplicatedInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductForm.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductFormattingTierPrice.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductGridIsRendered.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductHasImageInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInCart.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInCategory.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInCategoryOnCustomWebsite.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInCustomStoreView.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInStock.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInventoryMaxAllowedQty.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInventoryMinAllowedQty.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductInventoryThreshold.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductIsNotDisplayingOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductIsNotVisibleInCompareBlock.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductIsNotVisibleInComparePage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductNameOnDifferentStoreViews.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductNoImageInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductNotSearchableBySku.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductNotVisibleInCategory.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductOnCustomWebsite.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductOutOfStock.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductPriceOnDifferentStoreViews.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductRelatedProducts.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductSearchableBySku.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductSkuAutoGenerated.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductSpecialPriceOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductTierPriceInCart.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductTierPriceOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductTypeOrderOnCreate.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductUpSells.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductView.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductViewBreadcrumbsCategory.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductVisibleInCategory.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertProductsQtyAndStockStatusInAdminPanel.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertResetFilterMessage.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertSubCategoryNotInNavigationMenu.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertUpdatedProductStatusInGrid.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Constraint/AssertUsedSuperAttributeImpossibleDeleteMessages.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Fixture/Product/CustomOptions.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Handler/CatalogProductAttribute/Curl.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Handler/CatalogProductSimple/Curl.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Handler/Category/Curl.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Repository/CatalogProductAttribute.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Repository/CatalogProductAttribute/Options.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Repository/CatalogProductSimple.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Repository/Category.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/Repository/Product/CustomOptions.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/AdvancedMoveCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/CreateCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/DeleteCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/MoveCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/SubcategoryNotIncludeInNavigationMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/UpdateCategoryEntityFlatDataTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/UpdateCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/UpdateInactiveCategoryEntityFlatDataTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Category/UpdateTopCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/AbstractCompareProductsTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/AddCompareProductsTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/AddToCartCrossSellTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/AddToCartCrossSellTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/CreateSimpleProductEntityByAttributeMaskSkuTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/CreateSimpleProductEntityPartOneTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/CreateSimpleProductEntityPartTwoTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/CreateSimpleProductEntityTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/CreateSimpleProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/CreateVirtualProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/DeleteProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/DuplicateProductEntityTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/GridFilteringDeletedEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/ManageProductsStockTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/MassProductUpdateStatusTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/MassProductUpdateTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/NavigateRelatedProductsTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/NavigateUpSellProductsTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/NavigateUpSellProductsTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/ProductTypeSwitchingOnCreationTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/ProductTypeSwitchingOnCreationTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/ProductTypeSwitchingOnUpdateTest.php
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/ProductTypeSwitchingOnUpdateTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/UpdateSimpleProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/UpdateVirtualProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/Product/ValidateOrderOfProductTypeTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/CreateAttributeSetEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/CreateProductAttributeEntityFromProductPageTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/CreateProductAttributeEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/DeleteAssignedToTemplateProductAttributeTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/DeleteAttributeSetTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/DeleteProductAttributeEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/DeleteSystemProductAttributeTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/DeleteUsedInConfigurableProductAttributeTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/UpdateAttributeSetTest.xml
M   dev/tests/functional/tests/app/Magento/Catalog/Test/TestCase/ProductAttribute/UpdateProductAttributeEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventAbsentInGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventBlockAbsent.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventBlockVisibility.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventInGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventStatus.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertCatalogEventSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/Constraint/AssertWidgetCatalogEventsCarousel.php
M   dev/tests/functional/tests/app/Magento/CatalogEvent/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/Constraint/AssertExportProduct.php
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/Constraint/AssertExportProductDate.php
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/Constraint/AssertImportedProducts.php
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/Constraint/AssertProductsOnStorefront.php
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/TestCase/ExportProductsTest.php
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/TestCase/ExportProductsTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogImportExport/Test/TestCase/ImportProductsTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogPermissions/Test/Constraint/AssertCategoryPresent.php
M   dev/tests/functional/tests/app/Magento/CatalogPermissions/Test/Constraint/AssertPriceOnCategoryPageAbsent.php
M   dev/tests/functional/tests/app/Magento/CatalogPermissions/Test/Constraint/AssertPriceOnCategoryPagePresent.php
M   dev/tests/functional/tests/app/Magento/CatalogPermissions/Test/Constraint/AssertSearchFieldNotVisible.php
M   dev/tests/functional/tests/app/Magento/CatalogPermissions/Test/Constraint/AssertSearchFieldVisible.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleAppliedCatalogPage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleAppliedProductPage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleAppliedShoppingCart.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleForm.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleInGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleNotAppliedCatalogPage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleNotAppliedProductPage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleNotAppliedShoppingCart.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleNotInGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleNoticeMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleOnOnepageCheckout.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertCatalogPriceRuleSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Constraint/AssertProductAttributeIsUsedPromoRules.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Handler/CatalogRule/Curl.php
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/Repository/CatalogRule.xml
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/TestCase/ApplyCatalogPriceRulesTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogRule/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogRuleConfigurable/Test/Constraint/AssertCatalogPriceRuleAppliedCatalogPage.php
M   dev/tests/functional/tests/app/Magento/CatalogRuleStaging/Test/TestCase/ApplyCatalogPriceRulesTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAdvancedSearchAttributeIsAbsent.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAdvancedSearchEmptyTerm.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAdvancedSearchNoResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAdvancedSearchProductByAttribute.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAdvancedSearchProductResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAdvancedSearchProductsResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertAttributeSearchableByLabel.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertCatalogSearchNoResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertCatalogSearchNoResultMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertCatalogSearchQueryLength.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertCatalogSearchResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertCatalogSearchResultOrder.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertProductAddedToCartFromSearchResults.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertProductCanBeOpenedFromSearchResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchAttributeTest.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermForm.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermInGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermNotInGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermNotOnFrontend.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermOnFrontend.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermSuccessMassDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSearchTermSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Constraint/AssertSuggestSearchingResult.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/Fixture/CatalogSearchQuery/QueryText.php
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/TestCase/AdvancedSearchEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/TestCase/CreateSearchTermEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/TestCase/DeleteSearchTermEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/TestCase/MassDeleteSearchTermEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogSearch/Test/TestCase/SearchEntityResultsTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertAssignedExistingCampaignPreviewCorrect.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertCampaignsBlocked.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertDateInvalidErrorMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductCorrectAfterUpdate.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductHasNoUpdates.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductPriceCorrectInCustomWebsitePreview.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductPricesAfterUpdates.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductPricesCorrectInBackendPreview.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductSpecialPriceCorrectAfterUpdate.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductUpdateDeleteWarningMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductUpdateInfoCorrect.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductsCorrectInStagingGrid.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertProductsInUpdate.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertUpdateNotVisibleAfterActivation.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertUpdateSavedForProductWithCustomOptions.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/Constraint/AssertUpdateVisibleAfterActivation.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/AssignToExistingCampaignTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/CreateCustomWebsiteProductUpdateTest.php
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/CreateCustomWebsiteProductUpdateTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/CreateScheduledProductUpdateTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/Product/CreateSimpleProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/SameUpdateDateRangesTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogStaging/Test/TestCase/ValidateProductAfterUpdateTest.php
M   dev/tests/functional/tests/app/Magento/CatalogUrlRewrite/Test/Constraint/AssertCategoryUrlDuplicateErrorMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogUrlRewrite/Test/Constraint/AssertProductUrlDuplicateErrorMessage.php
M   dev/tests/functional/tests/app/Magento/CatalogUrlRewrite/Test/TestCase/CreateDuplicateUrlCategoryEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CatalogUrlRewrite/Test/TestCase/CreateDuplicateUrlProductEntity.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Cart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Cart/CartItem.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Cart/Shipping.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Cart/Sidebar.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Cart/Totals.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Onepage/Login.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Onepage/Payment/Method.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Onepage/Shipping.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Block/Onepage/Shipping/Method.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertAddToCartButtonAbsentOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertAddToCartButtonAbsentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertAddToCartButtonPresentOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertAddToCartButtonPresentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertAddedProductToCartSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertBillingAddressAbsentInPayment.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertBillingAddressSameAsShippingCheckbox.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCancelSuccessMessageInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCartBundleOptionTitle.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCartIsEmpty.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCartItemsOptions.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCartPerCustomer.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCheckoutErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertCustomerIsRedirectedToCheckoutFromCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertDiscountInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertEmailErrorValidationMessage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertEmailToolTips.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertGrandTotalInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertGrandTotalOrderReview.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertItemsCounterInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertLinkGoToCartNotPresentInSummaryBlock.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertLinkGoToCartPresentInSummaryBlock.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertMinicartEmpty.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertMinicartItemsQty.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertMyCartLinkRedirect.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertOrderSuccessPlacedMessage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertPagersNotPresentInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertPagersPresentInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertPagersSummaryText.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertPaymentMethodIsAbsentOnPaymentPage.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertPaymentMethodPersistence.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertPriceInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProceedToCheckoutButton.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductAbsentInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductDataInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductIsNotEditable.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductPresentInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductPresentInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductQtyInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertProductsAbsentInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertShippingAddressJsValidationMessagesIsAbsent.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertShippingInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertShippingMethodAvailableInCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertShippingTotalOrderReview.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertSubTotalOrderReview.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertSubtotalInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertSubtotalInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertTaxInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertTaxTotalOrderReview.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertTopDestinationsInSelect.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertVisibleItemsQtyInCheckoutSummaryBlock.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertVisibleItemsQtyInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertVisibleItemsQtyMessageInMiniShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/Constraint/AssertVisibleItemsQtyMessageOnCheckoutSummaryBlock.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/AddProductsToShoppingCartEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/EditShippingAddressOnePageCheckoutTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/OnePageCheckoutJsValidationTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/OnePageCheckoutOfflinePaymentMethodsTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/OnePageCheckoutTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/ShoppingCartPerCustomerTest.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/UpdateProductFromMiniShoppingCartEntityTest.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/UpdateProductFromMiniShoppingCartEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/UpdateShoppingCartTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestCase/ValidateEmailOnCheckoutTest.xml
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/AddProductsToTheCartStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/CreateCustomerAccountStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/EstimateShippingAndTaxStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/FillBillingInformationStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/PlaceOrderStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/ProceedToCheckoutStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/TestStep/SelectCheckoutMethodStep.php
M   dev/tests/functional/tests/app/Magento/Checkout/Test/etc/testcase.xml
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermAbsentInGrid.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermAbsentOnCheckout.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermInGrid.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermOnCheckout.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermRequireMessageOnMultishippingCheckout.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Constraint/AssertTermSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Handler/CheckoutAgreement/Curl.php
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/Page/MultishippingCheckoutOverview.xml
M   dev/tests/functional/tests/app/Magento/CheckoutAgreements/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/Block/Adminhtml/Page/Edit/PageForm.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertAuthorizationLinkIsVisibleOnStoreFront.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsBlockDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsBlockInGrid.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsBlockNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsBlockNotOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsBlockOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsBlockSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageDisabledOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageDuplicateErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageForm.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageFormSingleStoreMode.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageInGrid.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPagePreview.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPageSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertCmsPagesOnFrontendMultipleStoreViews.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Constraint/AssertUrlRewriteCmsPageRedirect.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Handler/CmsBlock/Curl.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Handler/CmsPage/Curl.php
M   dev/tests/functional/tests/app/Magento/Cms/Test/Page/Adminhtml/CmsBlockEdit.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/Page/Adminhtml/CmsBlockNew.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/Page/Adminhtml/CmsPageNew.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/Page/CmsPage.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/TestCase/CreateCmsPageEntityMultipleStoreViewsTest.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/TestCase/CreateCmsPageEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/TestCase/CreateCustomUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Cms/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Config/Test/Constraint/AssertAdminAccountSharing.php
M   dev/tests/functional/tests/app/Magento/Config/Test/TestCase/VerifyAdminAccountSharingEntityTest.php
M   dev/tests/functional/tests/app/Magento/ConfigurableImportExport/Test/TestCase/ExportProductsTest.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Block/Adminhtml/Product/Composite/Configure.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Block/Product/Price.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Block/Product/View.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertChildProductIsNotDisplayedSeparately.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertChildProductsGeneratedSku.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertChildProductsInGrid.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertConfigurableAttributesAbsentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertConfigurableAttributesBlockIsAbsentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertConfigurableProductDuplicateForm.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertConfigurableProductInCart.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertConfigurableProductInCategory.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertConfigurableProductPage.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertCurrencyRateAppliedOnProductPage.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertOutOfStockOptionIsAbsentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertProductAttributeAbsenceInVariationsSearch.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Constraint/AssertProductAttributeIsConfigurable.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Fixture/ConfigurableProduct/ConfigurableAttributesData.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Repository/ConfigurableProduct.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/Repository/ConfigurableProduct/ConfigurableAttributesData.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/CreateConfigurableProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/DeleteChildConfigurableProductTest.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/DeleteProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/UpdateConfigurableProductEntityTest.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/ValidateOrderOfProductTypeTest.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/VerifyConfigurableProductEntityPriceTest.xml
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/VerifyConfigurableProductLayeredNavigationTest.php
M   dev/tests/functional/tests/app/Magento/ConfigurableProduct/Test/TestCase/VerifyConfigurableProductLayeredNavigationTest.xml
M   dev/tests/functional/tests/app/Magento/Contact/Test/Constraint/AssertContactUsSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/CurrencySymbol/Test/Constraint/AssertCurrencySymbolOnCatalogPage.php
M   dev/tests/functional/tests/app/Magento/CurrencySymbol/Test/Constraint/AssertCurrencySymbolOnProductPage.php
M   dev/tests/functional/tests/app/Magento/CurrencySymbol/Test/Constraint/AssertCurrencySymbolOnProductPageCustomWebsite.php
M   dev/tests/functional/tests/app/Magento/CurrencySymbol/Test/Constraint/AssertCurrencySymbolOnProductPageMainWebsite.php
M   dev/tests/functional/tests/app/Magento/CurrencySymbol/Test/Constraint/AssertCurrencySymbolSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/CurrencySymbol/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/Block/Account/AddressesAdditional.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Block/Address/Renderer.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Block/Adminhtml/Edit/CustomerForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Block/Adminhtml/Edit/Tab/Addresses.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Block/Adminhtml/Group/CustomerGroupGrid.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertAdditionalAddressCreatedFrontend.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertAdditionalAddressDeletedFrontend.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertAddressDeletedBackend.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertAddressDeletedFrontend.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertChangePasswordFailMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertChangingWebsiteChangeCountries.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerAddressSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerBackendBackButton.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerBackendDuplicateErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerBackendFormTitle.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerBackendRequiredFields.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerDefaultAddressFrontendAddressBook.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerDefaultAddresses.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerDoesNotHaveDefaultAddresses.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerFailRegisterMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerForgotPasswordSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupAlreadyExists.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupChangedToDefaultOnCustomerForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupFieldsDisabled.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupInGrid.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupNotOnCartPriceRuleForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupNotOnCatalogPriceRuleForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupNotOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupOnCartPriceRuleForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupOnCatalogPriceRuleForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupOnCustomerForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupOnProductForm.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerGroupSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerInGrid.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerInfoSuccessSavedMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerInvalidEmail.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerIsLockedOnBackend.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerLogin.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerLoginErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerLogout.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerMassDeleteSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerNameFrontend.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerPasswordAutocompleteOnAuthorizationPopup.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerPasswordAutocompleteOnSignIn.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerPasswordChanged.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerRedirectToDashboard.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerSuccessRegisterMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertCustomerSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertMassActionSuccessUpdateMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertNoDeleteForSystemCustomerGroup.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Constraint/AssertWrongPassConfirmationMessage.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Handler/Customer/Curl.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Handler/CustomerGroup/Curl.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/Page/Adminhtml/CustomerGroupIndex.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/ChangeCustomerPasswordTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/CreateCustomerBackendEntityTest.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/CreateCustomerBackendEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/CreateExistingCustomerBackendEntity.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/DeleteCustomerBackendEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/DeleteCustomerGroupEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/ForgotPasswordOnFrontendTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/LoginOnFrontendFailTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/MassAssignCustomerGroupTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/PasswordAutocompleteOffTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/RegisterCustomerFrontendEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/UpdateCustomerBackendEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/UpdateCustomerFrontendEntityTest.php
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/UpdateCustomerFrontendEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Customer/Test/TestCase/VerifyDisabledCustomerGroupFieldTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerBalance/Test/Constraint/AssertCustomerBalanceAmount.php
M   dev/tests/functional/tests/app/Magento/CustomerBalance/Test/Constraint/AssertCustomerBalanceHistory.php
M   dev/tests/functional/tests/app/Magento/CustomerBalance/Test/Constraint/AssertRemoveStoreCreditSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerBalance/Test/Handler/CustomerBalance/Curl.php
M   dev/tests/functional/tests/app/Magento/CustomerBalance/Test/TestCase/CreateCreditMemoEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerBalance/Test/TestCase/CreateOrderBackendTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAddressAttributeErrorRequireMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAddressAttributeNotOnAddressEditPage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAddressAttributeOnAddressEditPage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAddressAttributesDisabled.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAddressAttributesVisibilityOnFrontend.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAddressCorrectOnCheckoutPage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerAttributesDisabled.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCanUploadFileOnRegistration.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeDefaultValueOnCustomerEditPage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeDefaultValueOnCustomerRegister.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeErrorDuplicateMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeInCustomerSegment.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeNotInCustomerSegment.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeNotInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeNotOnCreateOrderBackend.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeNotOnCustomerEditPage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeNotOnCustomerRegister.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeOnCreateOrderBackend.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeOnCustomerEditPage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeOnCustomerRegister.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertCustomerCustomAttributeSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Constraint/AssertNewCustomerHasCustomFileAttribute.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Handler/CustomerCustomAttribute/Curl.php
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/Repository/CustomerCustomAttribute.xml
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/TestCase/CreateCustomerCustomAttributesEntityTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/TestCase/CustomerAddressAttributeVisibilityTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/TestCase/DefaultCustomerAddressAttributesVisibilityTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerCustomAttributes/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerFinance/Test/Constraint/AssertExportCustomerFinances.php
M   dev/tests/functional/tests/app/Magento/CustomerFinance/Test/Constraint/AssertImportCustomerFinances.php
M   dev/tests/functional/tests/app/Magento/CustomerFinance/Test/TestCase/ExportCustomerFinancesTest.php
M   dev/tests/functional/tests/app/Magento/CustomerFinance/Test/TestCase/ExportCustomerFinancesTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerImportExport/Test/Constraint/AssertExportCustomerAddresses.php
M   dev/tests/functional/tests/app/Magento/CustomerImportExport/Test/Constraint/AssertImportCustomerAddresses.php
M   dev/tests/functional/tests/app/Magento/CustomerImportExport/Test/TestCase/ExportCustomerAddressesTest.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Block/Adminhtml/Banner/BannerForm.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentAvailableInBannerForm.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentForm.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentMatchedCustomer.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentMatchedCustomersInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentNotApplicableToBanner.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentNotInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentNotMatchedCustomer.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentPriceRule.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentReportInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentReportMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentReportNotInGrid.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Constraint/AssertCustomerSegmentSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/Handler/CustomerSegment/Curl.php
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/TestCase/CreateCustomerSegmentEntityWithCustomerAddressConditionsTest.xml
M   dev/tests/functional/tests/app/Magento/CustomerSegment/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Cybersource/Test/Block/Sandbox/Login.php
M   dev/tests/functional/tests/app/Magento/Cybersource/Test/Block/Sandbox/Profile/Entry.php
M   dev/tests/functional/tests/app/Magento/Directory/Test/Constraint/AssertCurrencyRateAppliedOnCatalogPage.php
M   dev/tests/functional/tests/app/Magento/Directory/Test/Constraint/AssertCurrencyRateAppliedOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Directory/Test/Constraint/AssertCurrencyRateSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Directory/Test/Constraint/AssertShippingPriceWithCustomCurrency.php
M   dev/tests/functional/tests/app/Magento/Directory/Test/Handler/CurrencyRate/Curl.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Block/Adminhtml/Catalog/Product/Edit/Section/Downloadable.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Block/Adminhtml/Product/Composite/Configure.xml
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Constraint/AbstractAssertTaxCalculationAfterCheckoutDownloadable.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Constraint/AbstractAssertTaxRuleIsAppliedToAllPricesDownloadable.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Constraint/AssertDownloadableDuplicateForm.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Constraint/AssertDownloadableLinksData.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Constraint/AssertDownloadableSamplesData.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Handler/DownloadableProduct/Curl.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/Handler/DownloadableProduct/Webapi.php
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/TestCase/DeleteProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Downloadable/Test/TestCase/ValidateOrderOfProductTypeTest.xml
M   dev/tests/functional/tests/app/Magento/Email/Test/Constraint/AssertEmailTemplateSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Email/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Eway/Test/TestCase/CreateOrderBackendTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/Block/Adminhtml/Product/Composite/Configure.xml
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/Constraint/AssertGiftCardDuplicateForm.php
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/Constraint/AssertGiftCardDuplicatedInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/Constraint/AssertGiftCardProductAddToCartForm.php
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/Constraint/AssertOrderGiftCardGenerated.php
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/TestCase/AddProductsToShoppingCartEntityTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/TestCase/CreateGiftCardProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/TestCase/OnePageCheckoutTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/TestCase/PrintOrderFrontendGuestTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCard/Test/TestCase/ValidateOrderOfProductTypeTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountForm.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountIsNotUsableInCartOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountNotInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountNotRedeemableOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountOnPrintOrder.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountRedeemableOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountSaveMessage.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountStatusInCustomerAccount.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountStatusInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardAccountUsableInCartOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardDiscount.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Constraint/AssertGiftCardSuccessAddMessage.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/Handler/GiftCardAccount/Curl.php
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/TestCase/CreateOrderBackendTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/TestCase/OnePageCheckoutTest.xml
M   dev/tests/functional/tests/app/Magento/GiftCardAccount/Test/etc/testcase.xml
M   dev/tests/functional/tests/app/Magento/GiftMessage/Test/Constraint/AssertGiftMessageInBackendOrder.php
M   dev/tests/functional/tests/app/Magento/GiftMessage/Test/Constraint/AssertGiftMessageInFrontendOrder.php
M   dev/tests/functional/tests/app/Magento/GiftMessage/Test/Constraint/AssertGiftMessageInFrontendOrderItems.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Block/Adminhtml/Customer/Edit/Items.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryActiveInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryActiveInWishlist.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryForm.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryInactiveNotInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryInactiveNotInWishlist.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryIsEmptyMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryItemsForm.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryItemsUpdatedFrontendSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryItemsUpdatedSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryManageItemsTab.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryNotInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistrySuccessAddedItemsMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistrySuccessDeleteMessageOnBackend.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistrySuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistrySuccessShareMessageOnBackend.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistrySuccessShareMessageOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeForm.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeNotInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeNotOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeOnFrontend.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertGiftRegistryTypeSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Constraint/AssertWidgetGiftRegistrySearch.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/Handler/GiftRegistryType/Curl.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/TestCase/AddProductsToGiftRegistryBackendEntityTest.php
M   dev/tests/functional/tests/app/Magento/GiftRegistry/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingForItemsInCart.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingForItemsOnFrontendCheckout.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingForOrderInCart.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingForOrderOnFrontendCheckout.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingForm.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingMassActionSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingNotInGrid.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingNotOnFrontendCheckoutCart.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingNotOnOrderCreationPage.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingOnFrontendCheckoutCart.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingSuccessUpdateMessage.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Constraint/AssertGiftWrappingTaxTotalsForOrder.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/Handler/GiftWrapping/Curl.php
M   dev/tests/functional/tests/app/Magento/GiftWrapping/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/GoogleTagManager/Test/Constraint/AssertGtmJsPresentOnHome.php
M   dev/tests/functional/tests/app/Magento/GoogleTagManager/Test/Constraint/AssertGtmJsPresentOnProduct.php
M   dev/tests/functional/tests/app/Magento/GroupedImportExport/Test/TestCase/ExportProductsTest.xml
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Block/Adminhtml/Product/Grouped/AssociatedProducts/Search/Grid.php
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Block/Catalog/Product/View.php
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Constraint/AbstractAssertTaxRuleIsAppliedToAllPricesOnGroupedProductPage.php
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Constraint/AssertGroupedProductForm.php
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Constraint/AssertGroupedProductInItemsOrderedGrid.php
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Constraint/AssertGroupedProductsDefaultQty.php
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/Fixture/GroupedProduct.xml
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/TestCase/CreateGroupedProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/TestCase/DeleteProductEntityTest.xml
M   dev/tests/functional/tests/app/Magento/GroupedProduct/Test/TestCase/ValidateOrderOfProductTypeTest.xml
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Constraint/AssertExportNoDataErrorMessage.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Constraint/AssertImportCheckData.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Constraint/AssertImportCheckDataErrorMessage.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Constraint/AssertImportCheckDataErrorMessagesList.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Constraint/AssertImportSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Constraint/AssertProductAttributeAbsenceForExport.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Fixture/Import/File.php
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/Page/Adminhtml/AdminExportIndex.xml
M   dev/tests/functional/tests/app/Magento/ImportExport/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Indexer/Test/Constraint/AssertIndexerStatus.php
M   dev/tests/functional/tests/app/Magento/Indexer/Test/Constraint/AssertUpdateByScheduleSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Indexer/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertAdminUriAutogenerated.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertAgreementTextPresent.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertCurrencySelected.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertDevdocsLink.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertGenerationFilePathCheck.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertKeyCreated.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertLanguageSelected.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertRewritesEnabled.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertSecureUrlEnabled.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertSuccessInstall.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Constraint/AssertSuccessfulReadinessCheck.php
M   dev/tests/functional/tests/app/Magento/Install/Test/Page/DevdocsInstall.xml
M   dev/tests/functional/tests/app/Magento/Install/Test/TestCase/InstallTest.xml
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertEmailValidationErrorGenerated.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIncorrectUserPassword.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationForm.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationInGrid.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationNameDuplicationErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationResourcesPopup.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationSuccessActivationMessage.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationSuccessReauthorizeMessage.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationSuccessSaveMessageNotPresent.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationTokensAfterReauthorize.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertIntegrationTokensPopup.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Constraint/AssertNoAlertPopup.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Handler/Integration/Curl.php
M   dev/tests/functional/tests/app/Magento/Integration/Test/Repository/Integration.xml
M   dev/tests/functional/tests/app/Magento/Integration/Test/TestCase/ActivateIntegrationEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Integration/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationErrorSentMessage.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationForm.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationFrontendNoticeSendDuplicateMessage.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationFrontendSuccessSentMessage.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationInGrid.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationInGridOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationNoticeMessage.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationOneEntry.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationSuccessDiscardMessage.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationSuccessSentMessage.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Constraint/AssertInvitationSuccessSentMessageOnBackend.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/Handler/Invitation/Curl.php
M   dev/tests/functional/tests/app/Magento/Invitation/Test/TestCase/CreateCustomerInvitationBackendEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Invitation/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/Block/Navigation.php
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/Constraint/AssertCategoryLayeredNavigation.php
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/Constraint/AssertCategorySortingOnFilteredProductList.php
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/Constraint/AssertFilterProductList.php
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/Constraint/AssertProductsCount.php
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/TestCase/ProductsCountInLayeredNavigationTest.php
M   dev/tests/functional/tests/app/Magento/LayeredNavigation/Test/TestCase/ProductsCountInLayeredNavigationTest.xml
M   dev/tests/functional/tests/app/Magento/Logging/Test/Constraint/AssertAdminLoggingGrid.php
M   dev/tests/functional/tests/app/Magento/Logging/Test/Constraint/AssertAdminLoggingLastEntry.php
M   dev/tests/functional/tests/app/Magento/Logging/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Msrp/Test/Constraint/AssertMapOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Msrp/Test/Constraint/AssertMapOnProductView.php
M   dev/tests/functional/tests/app/Magento/Msrp/Test/Constraint/AssertMsrpInShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Msrp/Test/Constraint/AssertMsrpOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Msrp/Test/Constraint/AssertMsrpOnProductView.php
M   dev/tests/functional/tests/app/Magento/Msrp/Test/Constraint/AssertProductEditPageAdvancedPricingFields.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AbstractAssertMultipleWishlistState.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AbstractAssertMultipleWishlistSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertDeleteMultipleWishlistButtonIsAbsent.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertMultipleWishlistAbsentInMyAccount.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertMultipleWishlistIsPrivate.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertMultipleWishlistIsPublic.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertMultipleWishlistPresentInMyAccount.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertProductAbsentInDefaultWishlist.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertProductInCustomWishlist.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertProductInDefaultWishlist.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/Constraint/AssertWishlistReportGrid.php
M   dev/tests/functional/tests/app/Magento/MultipleWishlist/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Multishipping/Test/Constraint/AssertMultishippingOrderSuccessPlacedMessage.php
M   dev/tests/functional/tests/app/Magento/Multishipping/Test/TestStep/FillShippingInformationStep.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertCustomerIsSubscribedToNewsletter.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterForm.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterInGrid.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterPreview.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterQueue.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterQueueForm.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterQueueInGrid.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterQueueSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Constraint/AssertNewsletterSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/Handler/Template/Curl.php
M   dev/tests/functional/tests/app/Magento/Newsletter/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Constraint/AssertCacheFlushSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Constraint/AssertCacheInvalidateNotice.php
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Constraint/AssertCacheInvalidatePopUp.php
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Constraint/AssertCacheIsRefreshableAndInvalidated.php
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Constraint/AssertCacheStatus.php
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Constraint/AssertFlushStaticFilesCacheButtonVisibility.php
M   dev/tests/functional/tests/app/Magento/PageCache/Test/Repository/ConfigData.xml
M   dev/tests/functional/tests/app/Magento/PageCache/Test/TestCase/FlushStaticFilesCacheButtonVisibilityTest.xml
M   dev/tests/functional/tests/app/Magento/Payment/Test/Constraint/AssertCardRequiredFields.php
M   dev/tests/functional/tests/app/Magento/Payment/Test/Constraint/AssertFieldsAreActive.php
M   dev/tests/functional/tests/app/Magento/Payment/Test/Constraint/AssertFieldsAreDisabled.php
M   dev/tests/functional/tests/app/Magento/Payment/Test/Constraint/AssertFieldsAreEnabled.php
M   dev/tests/functional/tests/app/Magento/Payment/Test/Constraint/AssertFieldsArePresent.php
M   dev/tests/functional/tests/app/Magento/Paypal/Test/Constraint/AssertExpressCancelledMessage.php
M   dev/tests/functional/tests/app/Magento/Paypal/Test/Constraint/Sandbox/AssertTotalPaypalReview.php
M   dev/tests/functional/tests/app/Magento/Paypal/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Paypal/Test/TestCase/OnePageCheckoutDeclinedTest.xml
M   dev/tests/functional/tests/app/Magento/Paypal/Test/TestStep/InContextCheckoutWithPaypalFromShoppingCartStep.php
M   dev/tests/functional/tests/app/Magento/Persistent/Test/Constraint/AssertCustomerIsRedirectedToCheckout.php
M   dev/tests/functional/tests/app/Magento/ProductVideo/Test/Constraint/AssertGetVideoInfoDataIsCorrect.php
M   dev/tests/functional/tests/app/Magento/ProductVideo/Test/Constraint/AssertNoVideoCategoryView.php
M   dev/tests/functional/tests/app/Magento/ProductVideo/Test/Constraint/AssertNoVideoProductView.php
M   dev/tests/functional/tests/app/Magento/ProductVideo/Test/Constraint/AssertVideoCategoryView.php
M   dev/tests/functional/tests/app/Magento/ProductVideo/Test/Constraint/AssertVideoConfigurableProductView.php
M   dev/tests/functional/tests/app/Magento/ProductVideo/Test/Constraint/AssertVideoProductView.php
M   dev/tests/functional/tests/app/Magento/Reminder/Test/Constraint/AssertReminderForm.php
M   dev/tests/functional/tests/app/Magento/Reminder/Test/Constraint/AssertReminderInGrid.php
M   dev/tests/functional/tests/app/Magento/Reminder/Test/Constraint/AssertReminderMatchedCustomers.php
M   dev/tests/functional/tests/app/Magento/Reminder/Test/Constraint/AssertReminderSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Reminder/Test/TestCase/CreateAutomatedEmailReminderRuleTest.php
M   dev/tests/functional/tests/app/Magento/Reminder/Test/TestCase/CreateAutomatedEmailReminderRuleTest.xml
M   dev/tests/functional/tests/app/Magento/Reminder/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Reports/Test/Block/Adminhtml/Product/Sold/Grid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertAbandonedCartCustomerInfoResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertBestsellerReportResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertCouponReportResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertCustomerOrderCountReportResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertCustomerOrderTotalReportResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertDownloadsReportResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertInvoiceReportIntervalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertInvoiceReportTotalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertLifetimeStatisticsUpdatedMessage.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertLowStockProductInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertNewAccountsReportTotalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertOrderedProductReportForConfigurableProduct.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertOrderedProductResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductInCartResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductReportByCustomerInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductReportByCustomerNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductReviewIsAvailableForProduct.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductReviewReportIsVisibleInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductReviewsQtyByCustomer.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertProductViewsReportTotalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertRecentStatisticsUpdatedMessage.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertRefundReportIntervalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertReportStatisticsNoticeMessage.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertReportsUpdatedTimezone.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertSalesReportIntervalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertSalesReportTotalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertSearchTermReportForm.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertSearchTermsInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertShippingReportIntervalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertShippingReportTotalResult.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertTaxReportInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/Constraint/AssertTaxReportNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/TestCase/AbandonedCartsReportEntityTest.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Reports/Test/TestCase/OrderedProductsReportEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Reports/Test/TestCase/ProductsInCartReportEntityTest.php
M   dev/tests/functional/tests/app/Magento/Reports/Test/TestCase/SearchTermsReportEntityTest.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingInGrid.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingInProductPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingNotInProductPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingOnReviewPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductRatingSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewBackendSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewForm.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewInGrid.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewInGridOnCustomerPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewIsAbsentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewMassActionSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewMassActionSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewNotOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertProductReviewOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertReviewCreationSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertReviewLinksIsPresentOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertReviewSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Constraint/AssertSetApprovedProductReview.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Handler/Rating/Curl.php
M   dev/tests/functional/tests/app/Magento/Review/Test/Handler/Review/Curl.php
M   dev/tests/functional/tests/app/Magento/Review/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRateSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardInHistoryGrid.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardNoExchangeMessageForCurrencyToPoints.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardNoExchangeMessageForPointsToCurrency.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardPointsBalance.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardPointsMessageOnCustomerRegistration.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardPointsMessageOnShoppingCart.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardPointsSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardSubscriptionOnBackend.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Constraint/AssertRewardSubscriptionSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Handler/Reward/Curl.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/Handler/RewardRate/Curl.php
M   dev/tests/functional/tests/app/Magento/Reward/Test/TestCase/CreateExchangeRateForRewardPointsEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Reward/Test/TestCase/CreateOrderBackendTest.xml
M   dev/tests/functional/tests/app/Magento/Reward/Test/TestCase/OnePageCheckoutTest.xml
M   dev/tests/functional/tests/app/Magento/Reward/Test/TestCase/UpdateExchangeRateForRewardPointsEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Reward/Test/TestStep/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AbstractAssertRmaOnBackend.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaApprove.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaAuthorize.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaForm.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaInGrid.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaOnFrontendForCustomer.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaOnFrontendForGuest.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaProcess.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/Constraint/AssertRmaSuccessSaveMessageOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Rma/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/Actions.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/Create.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/Create/Billing/Method.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/Create/Items.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/Create/Shipping/Method.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/Creditmemo/Totals.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Block/Adminhtml/Order/View/Tab/Invoices/Grid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertAcceptPaymentMessageInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertAcceptPaymentSuccessMessagePresent.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertAuthorizationInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertCancelInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertCaptureInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertCartSectionIsEmptyOnBackendOrderPage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertCartSectionWithProductsOnBackendOrderPage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertCreditMemoButton.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertCreditMemoItems.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertDenyPaymentMessageInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertDenyPaymentSuccessMessagePresent.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceInInvoicesGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceInInvoicesTab.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceItems.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceNotInInvoicesGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceStatusInOrdersGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoiceWithShipmentSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoicedAmountOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertInvoicedOrderOnDashboard.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertItemsOrderedSectionContainsProducts.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertItemsOrderedSectionOnBackendOrderIsEmpty.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertNoCreditMemoButton.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertNoInvoiceButton.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOnlineInvoiceCannotBeCreated.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderAddresses.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderBillingAndShippingAddressesAreDifferent.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderButtonsAvailable.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderButtonsUnavailable.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderByDateInOrdersGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderCancelMassActionFailMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderCancelMassActionSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderCancelSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderCommentsHistoryNotifyStatus.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderGrandTotal.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderGraphImageIsVisible.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderInOrdersGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderInOrdersGridOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderItemsPagerDisplayedOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderItemsPagerHiddenOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderMassOnHoldSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderNotInOrdersGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderNotVisibleOnMyAccount.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderOnHoldFailMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderOnHoldSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderPaymentInformation.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderReleaseFailMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderReleaseSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusDuplicateStatus.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusInGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusIsCanceled.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusIsCorrect.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusNotAssigned.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusSuccessAssignMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderStatusSuccessUnassignMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderSuccessVoidedMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertOrderTotalPaid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertProductInCustomerShoppingCartOnBackendGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertProductInItemsOrderedGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertProductsQtyAfterOrderCancel.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundInCreditMemoTab.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundInRefundsGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundNotInRefundsGrid.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundOrderStatusInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertRefundedGrandTotalOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertReorderButtonIsNotVisibleOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertReorderStatusIsCorrect.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertSalesPrintOrderBillingAddress.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertSalesPrintOrderGrandTotal.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertSalesPrintOrderPaymentMethod.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertSalesPrintOrderProducts.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertTransactionStatus.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertUnholdButton.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Constraint/AssertVoidInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Handler/OrderInjectable/Curl.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Handler/OrderInjectable/Webapi.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/Handler/OrderStatus/Curl.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/CancelCreatedOrderTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/CreateCreditMemoEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/CreateCustomOrderStatusEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/CreateInvoiceEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/CreateOrderBackendPartOneTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/CreateOrderBackendTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/GridSortingTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/MassOrdersUpdateTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/MoveLastOrderedProductsOnOrderPageTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/MoveShoppingCartProductsOnOrderPageTest.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestStep/CreateCreditMemoStep.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/TestStep/CreateShipmentStep.php
M   dev/tests/functional/tests/app/Magento/Sales/Test/etc/testcase.xml
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveCreditMemoInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveCreditMemoItems.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveInvoiceInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveInvoiceItems.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderAvailableButtons.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderCancelMassActionErrorMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderCancelMassActionSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderNotInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderOnHoldErrorMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderOnHoldSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderReleaseErrorMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderReleaseSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderStatusInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderSuccessRemoveMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrderWarningMessage.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveOrdersCancelMassActionsMessages.php
M   dev/tests/functional/tests/app/Magento/SalesArchive/Test/Constraint/AssertArchiveShipmentInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Block/Adminhtml/Promo/Quote/Edit/PromoQuoteForm.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleConditionIsApplied.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleConditionIsNotApplied.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleForm.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleFreeShippingIsApplied.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleIsNotPresentedInGrid.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertCartPriceRuleSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Constraint/AssertSalesRuleOnPrintOrder.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Handler/SalesRule/Curl.php
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/Repository/SalesRule.xml
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/TestCase/ApplySeveralSalesRuleEntityTest.xml
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/TestCase/CreateSalesRuleEntityTest.xml
M   dev/tests/functional/tests/app/Magento/SalesRule/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/ScheduledImportExport/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Search/Test/Constraint/AssertSynonymGroupDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Search/Test/Constraint/AssertSynonymGroupInGrid.php
M   dev/tests/functional/tests/app/Magento/Search/Test/Constraint/AssertSynonymGroupSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Search/Test/Constraint/AssertSynonymGroupsSearch.php
M   dev/tests/functional/tests/app/Magento/Search/Test/Constraint/AssertSynonymMergeErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Search/Test/Constraint/AssertSynonymRestrictedAccess.php
M   dev/tests/functional/tests/app/Magento/Search/Test/Handler/SynonymGroup/Curl.php
M   dev/tests/functional/tests/app/Magento/Search/Test/TestCase/AdvancedSearchWithAttributeTest.xml
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertCustomerEmailChanged.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertCustomerIsLocked.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertCustomerPasswordRequiredClasses.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertCustomerResetPasswordFailed.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertDefaultAccountInformation.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertPasswordIsNotSecureEnoughMessage.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertPasswordLengthErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertUserIsLocked.php
M   dev/tests/functional/tests/app/Magento/Security/Test/Constraint/AssertUserPasswordResetFailed.php
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/LockAdminUserWhenCreatingNewIntegrationTest.php
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/LockAdminUserWhenCreatingNewRoleTest.php
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/LockAdminUserWhenCreatingNewUserTest.php
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/LockAdminUserWhenCreatingNewUserTest.xml
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/LockAdminUserWhenEditingIntegrationTest.php
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/LockCustomerOnEditPageTest.php
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/ResetCustomerPasswordFailedTest.xml
M   dev/tests/functional/tests/app/Magento/Security/Test/TestCase/ResetUserPasswordFailedTest.xml
M   dev/tests/functional/tests/app/Magento/Setup/Test/Block/Readiness.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Block/SelectVersion.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Block/SelectVersion/OtherComponentsGrid.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Block/SelectVersion/OtherComponentsGrid/Item.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/AssertApplicationVersion.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/AssertSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/AssertSuccessfulReadinessCheck.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/AssertVersionAndEditionCheck.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Extension/AssertExtensionAndVersionCheck.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Extension/AssertFindExtensionOnGrid.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Extension/AssertSelectSeveralExtensions.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Extension/AssertSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Extension/AssertVersionOnGrid.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Module/AssertModuleInGrid.php
M   dev/tests/functional/tests/app/Magento/Setup/Test/Constraint/Module/AssertSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertCityBasedShippingRateChanged.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertNoShipButton.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShipTotalQuantity.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShipmentInShipmentsGrid.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShipmentInShipmentsTab.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShipmentItems.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShipmentNotInShipmentsGrid.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShipmentSuccessCreateMessage.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertShippingMethodOnPrintOrder.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/Constraint/AssertTrackingDetailsIsPresent.php
M   dev/tests/functional/tests/app/Magento/Shipping/Test/TestCase/TrackingShipmentForPlacedOrderTest.xml
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Block/SignifydConsole/CaseInfo.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Block/SignifydConsole/CaseSearch.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Block/SignifydConsole/SignifydLogin.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Constraint/AssertAwaitingSignifydGuaranteeInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Constraint/AssertCaseInfoOnAdmin.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Constraint/AssertCaseInfoOnSignifydConsole.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Constraint/AssertSignifydCaseInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Constraint/AssertSignifydCaseInOrdersGrid.php
M   dev/tests/functional/tests/app/Magento/Signifyd/Test/Constraint/AssertSignifydGuaranteeCancelInCommentsHistory.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapContent.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapFailFolderSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapFailPathSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapInGrid.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapSubmissionToRobotsTxt.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapSuccessGenerateMessage.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapSuccessSaveAndGenerateMessages.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Constraint/AssertSitemapSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/Handler/Sitemap/Curl.php
M   dev/tests/functional/tests/app/Magento/Sitemap/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Staging/Test/Block/Adminhtml/Preview/PreviewOptions.php
M   dev/tests/functional/tests/app/Magento/Staging/Test/Constraint/AssertUpdateCampaignsAreVisibleInGrid.php
M   dev/tests/functional/tests/app/Magento/Staging/Test/Constraint/AssertUpdateScheduledChangesErrorMessage.php
M   dev/tests/functional/tests/app/Magento/Staging/Test/Handler/Update/Curl.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreBackend.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreCodeInUrl.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreDisabledErrorSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreForm.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreFrontend.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupForm.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupInGrid.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupNoDeleteButton.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupOnStoreViewForm.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupSuccessDeleteAndBackupMessages.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreGroupSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreInGrid.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreNoDeleteButton.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreNotOnFrontend.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreSuccessDeleteAndBackupMessages.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertStoreSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteForm.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteInGrid.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteOnStoreForm.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteSuccessDeleteAndBackupMessages.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Constraint/AssertWebsiteSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Handler/Store/Curl.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Handler/StoreGroup/Curl.php
M   dev/tests/functional/tests/app/Magento/Store/Test/Handler/Website/Curl.php
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/AccessAdminWithStoreCodeInUrlTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/CreateStoreGroupEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/CreateWebsiteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/DeleteStoreEntityTest.php
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/DeleteStoreEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/DeleteStoreGroupEntityTest.php
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/DeleteStoreGroupEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/DeleteWebsiteEntityTest.php
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/MoveStoreToOtherGroupSameWebsiteTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/UpdateStoreEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/UpdateStoreGroupEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestCase/UpdateWebsiteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Store/Test/TestStep/DeleteWebsitesEntityStep.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertBackupSuccessMassDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertBackupSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertItemInGrid.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertNoBackupItemInGrid.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertNoReportItemInGrid.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertReportSuccessMassDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertReportSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Support/Test/Constraint/AssertUserRoleRestrictedAccess.php
M   dev/tests/functional/tests/app/Magento/Support/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Swagger/Test/Constraint/AssertApiInfoTitleOnPage.php
M   dev/tests/functional/tests/app/Magento/Swagger/Test/Constraint/AssertEndpointContentDisplay.php
M   dev/tests/functional/tests/app/Magento/Swagger/Test/Constraint/AssertServiceContentDisplay.php
M   dev/tests/functional/tests/app/Magento/Swagger/Test/Constraint/AssertSwaggerSectionLoadOnPage.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Block/Product/ProductList/ProductItem.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Block/Product/ViewWithSwatches.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Constraint/AssertProductPriceWithSelectedSwatchOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Constraint/AssertSelectedSwatchOptionsOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Constraint/AssertSwatchOptionsOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Constraint/AssertSwatchesAreNotVisibleOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Constraint/AssertSwatchesAreVisibleOnCategoryPage.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Handler/SwatchProductAttribute/Curl.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Repository/ConfigurableProduct.xml
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Repository/ConfigurableProduct/CheckoutData.xml
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Repository/ConfigurableProduct/ConfigurableAttributesData.xml
M   dev/tests/functional/tests/app/Magento/Swatches/Test/Repository/SwatchProductAttribute.xml
M   dev/tests/functional/tests/app/Magento/Swatches/Test/TestCase/AddConfigurableProductWithSwatchToShoppingCartTest.php
M   dev/tests/functional/tests/app/Magento/Swatches/Test/TestCase/AddConfigurableProductWithSwatchToShoppingCartTest.xml
M   dev/tests/functional/tests/app/Magento/Swatches/Test/TestStep/AddProductToCartFromCatalogCategoryPageStep.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Constraint/AssertProductCrossSellsForCustomerSegment.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Constraint/AssertTargetRuleForm.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Constraint/AssertTargetRuleInGrid.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Constraint/AssertTargetRuleIsNotPresentedInGrid.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Constraint/AssertTargetRuleSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Constraint/AssertTargetRuleSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/Handler/TargetRule/Curl.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/TestCase/AbstractTargetRuleEntityTest.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/TestCase/CreateTargetRuleEntityTest.php
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/TestCase/CreateTargetRuleEntityTest.xml
M   dev/tests/functional/tests/app/Magento/TargetRule/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AbstractAssertOrderTaxOnBackend.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AbstractAssertTaxCalculationAfterCheckout.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AbstractAssertTaxRuleIsAppliedToAllPrices.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateForm.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateInGrid.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateInTaxRule.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateNotInTaxRule.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRateSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleForm.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleInGrid.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleIsApplied.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleIsNotApplied.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxRuleSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxWithCrossBorderApplied.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Constraint/AssertTaxWithCrossBorderNotApplied.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/Handler/TaxRule/Curl.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/CreateTaxRateEntityTest.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/CreateTaxRateEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/CreateTaxRuleEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/DeleteTaxRateEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/DeleteTaxRuleEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/TaxWithCrossBorderTest.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/UpdateTaxRateEntityTest.php
M   dev/tests/functional/tests/app/Magento/Tax/Test/TestCase/UpdateTaxRateEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Theme/Test/Block/Html/Breadcrumbs.php
M   dev/tests/functional/tests/app/Magento/Theme/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Ui/Test/Block/Adminhtml/DataGrid.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/Block/Adminhtml/FormSections.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/Constraint/AssertGridFiltering.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/Constraint/AssertGridFullTextSearch.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/Constraint/AssertGridSorting.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/TestCase/GridFilteringDeletedEntityTest.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/TestCase/GridFullTextSearchTest.php
M   dev/tests/functional/tests/app/Magento/Ui/Test/TestCase/GridSortingTest.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertCategoryUrlWithCustomStoreView.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertPageByUrlRewriteIsNotFound.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteCategoryInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteCategoryNotInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteCategoryRedirect.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteCustomRedirect.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteCustomSearchRedirect.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteDeletedMessage.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteNotInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteProductInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteProductNotInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteProductRedirect.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteRedirectInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteSaveMessage.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteSuccessOutsideRedirect.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Constraint/AssertUrlRewriteUpdatedProductInGrid.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Fixture/UrlRewrite/TargetPath.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/Handler/UrlRewrite/Curl.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/CategoryUrlRewriteTest.php
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/CategoryUrlRewriteTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/CreateCategoryRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/CreateCustomUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/CreateProductUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/CreateProductWithSeveralWebsitesUrlRewriteTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/DeleteCustomUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/UpdateCategoryUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/UpdateCustomUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/UrlRewrite/Test/TestCase/UpdateProductUrlRewriteEntityTest.xml
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertImpossibleDeleteYourOwnAccount.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertImpossibleDeleteYourOwnRole.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertIncorrectUserPassword.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertRoleInGrid.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertRoleNotInGrid.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertRoleSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertRoleSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserDuplicateMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserFailedLoginByPermissionMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserFailedLoginMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserInGrid.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserInvalidEmailHostnameMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserInvalidEmailMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserNotInGrid.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserPasswordChangedSuccessfully.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserPermissionsOnlyConfigurationIndexPage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserRoleRestrictedAccess.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserSuccessLogOut.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserSuccessLogin.php
M   dev/tests/functional/tests/app/Magento/User/Test/Constraint/AssertUserSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/User/Test/Handler/Role/Curl.php
M   dev/tests/functional/tests/app/Magento/User/Test/Handler/User/Curl.php
M   dev/tests/functional/tests/app/Magento/User/Test/TestCase/LockAdminUserEntityTest.php
M   dev/tests/functional/tests/app/Magento/User/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/User/Test/TestCase/RevokeAllAccessTokensForAdminWithoutTokensTest.xml
M   dev/tests/functional/tests/app/Magento/User/Test/TestCase/UpdateAdminUserEntityTest.xml
M   dev/tests/functional/tests/app/Magento/User/Test/TestCase/UpdateAdminUserRoleEntityTest.php
M   dev/tests/functional/tests/app/Magento/User/Test/TestCase/UpdateAdminUserRoleEntityTest.xml
M   dev/tests/functional/tests/app/Magento/User/Test/TestStep/LoginUserOnBackendStep.php
M   dev/tests/functional/tests/app/Magento/User/Test/TestStep/LogoutUserOnBackendStep.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableForm.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableInGrid.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableInPage.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableNotInCmsPageForm.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableNotInGrid.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableRestrictedAccess.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Constraint/AssertCustomVariableSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/Handler/SystemVariable/Curl.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Variable/Test/TestCase/UpdateCustomVariableEntityTest.php
M   dev/tests/functional/tests/app/Magento/Variable/Test/TestCase/UpdateCustomVariableEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Vault/Test/Constraint/AssertCreditCardNotPresentOnCheckout.php
M   dev/tests/functional/tests/app/Magento/Vault/Test/Constraint/AssertSaveCreditCardOptionNotPresent.php
M   dev/tests/functional/tests/app/Magento/Vault/Test/Constraint/AssertStoredPaymentDeletedMessage.php
M   dev/tests/functional/tests/app/Magento/VersionsCms/Test/Constraint/AssertWidgetHierarchyAnchorTextOnHomePage.php
M   dev/tests/functional/tests/app/Magento/VersionsCms/Test/Constraint/AssertWidgetHierarchyNodeLink.php
M   dev/tests/functional/tests/app/Magento/VersionsCms/Test/Handler/CmsHierarchy/Curl.php
M   dev/tests/functional/tests/app/Magento/VersionsCms/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/VisualMerchandiser/Test/Block/Adminhtml/Category/Edit/Section/ProductGrid.php
M   dev/tests/functional/tests/app/Magento/VisualMerchandiser/Test/Constraint/AssertDragPositions.php
M   dev/tests/functional/tests/app/Magento/VisualMerchandiser/Test/Constraint/AssertProductsNotInCategory.php
M   dev/tests/functional/tests/app/Magento/VisualMerchandiser/Test/TestCase/RemoveProductTest.xml
M   dev/tests/functional/tests/app/Magento/Weee/Test/Constraint/AssertFptApplied.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertProductInCatalogNewProductsList.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertThemeFilterValuesOnWidgetGrid.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetAbsentOnFrontendHome.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetCatalogCategoryLink.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetCatalogNewProductsList.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetCmsPageLink.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetInGrid.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetOnFrontendInCatalog.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetOnProductPage.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetProductLink.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetRecentlyComparedProducts.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetRecentlyViewedProducts.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetSuccessDeleteMessage.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Constraint/AssertWidgetSuccessSaveMessage.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/Handler/Widget/Curl.php
M   dev/tests/functional/tests/app/Magento/Widget/Test/TestCase/NavigateMenuTest.xml
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Block/Customer/Wishlist/Items/Product.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AbstractAssertWishlistProductDetails.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertAddProductToWishlistSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertCustomerWishlistOnBackendIsEmpty.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertMoveProductToWishlistSuccessMessage.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductInCustomerWishlistOnBackendGrid.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductIsPresentInCustomerBackendWishlist.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductIsPresentInWishlist.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductPriceIsNotZero.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductRegularPriceOnStorefront.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductsIsAbsentInWishlist.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertProductsIsPresentInCustomerBackendWishlist.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertWishlistIsEmpty.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Constraint/AssertWishlistShareMessage.php
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/Page/WishlistIndex.xml
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/TestCase/AddProductToWishlistEntityTest.xml
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/TestCase/MoveProductFromShoppingCartToWishlistTest.xml
M   dev/tests/functional/tests/app/Magento/Wishlist/Test/TestCase/ShareWishlistEntityTest.xml
M   dev/tests/functional/testsuites/Magento/Mtf/TestSuite/InjectableTests.php
M   dev/tests/functional/testsuites/Magento/Mtf/TestSuite/InjectableTests/basic_green.xml
M   dev/tests/functional/utils/bootstrap.php
M   dev/tests/functional/utils/command.php
M   dev/tests/functional/utils/deleteMagentoGeneratedCode.php
M   dev/tests/functional/utils/export.php
M   dev/tests/functional/utils/generate.php
M   dev/tests/functional/utils/generate/fixture.php
M   dev/tests/functional/utils/generate/repository.php
M   dev/tests/functional/utils/locales.php
M   dev/tests/functional/utils/log.php
M   dev/tests/functional/utils/pathChecker.php
M   dev/tests/functional/utils/website.php
M   dev/tests/integration/_files/Magento/TestModuleAsyncAmqp/etc/module.xml
M   dev/tests/integration/_files/Magento/TestModuleDirectoryZipCodes/etc/module.xml
M   dev/tests/integration/_files/Magento/TestModuleFakePaymentMethod/etc/module.xml
M   dev/tests/integration/_files/Magento/TestModuleMessageQueueConfigOverride/composer.json
M   dev/tests/integration/_files/Magento/TestModuleMessageQueueConfigOverride/etc/module.xml
M   dev/tests/integration/_files/Magento/TestModuleMessageQueueConfiguration/composer.json
M   dev/tests/integration/_files/Magento/TestModuleMessageQueueConfiguration/etc/module.xml
M   dev/tests/integration/_files/Magento/TestModuleSample/composer.json
M   dev/tests/integration/_files/Magento/TestModuleSample/etc/module.xml
M   dev/tests/integration/_files/Magento/TestModuleSynchronousAmqp/etc/module.xml
M   dev/tests/integration/etc/di/preferences/ce.php
M   dev/tests/integration/etc/install-config-mysql.travis.php.dist
M   dev/tests/integration/framework/Magento/TestFramework/Annotation/AppArea.php
M   dev/tests/integration/framework/Magento/TestFramework/Annotation/DataFixture.php
M   dev/tests/integration/framework/Magento/TestFramework/Annotation/DataFixtureBeforeTransaction.php
M   dev/tests/integration/framework/Magento/TestFramework/Annotation/IndexerDimensionMode.php
M   dev/tests/integration/framework/Magento/TestFramework/Application.php
M   dev/tests/integration/framework/Magento/TestFramework/Backend/App/Config.php
M   dev/tests/integration/framework/Magento/TestFramework/Bootstrap/DocBlock.php
M   dev/tests/integration/framework/Magento/TestFramework/Db/Mysql.php
M   dev/tests/integration/framework/Magento/TestFramework/Helper/Amqp.php
M   dev/tests/integration/framework/Magento/TestFramework/TestCase/AbstractBackendController.php
M   dev/tests/integration/framework/Magento/TestFramework/TestCase/AbstractController.php
M   dev/tests/integration/framework/tests/unit/phpunit.xml.dist
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Annotation/AppAreaTest.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Annotation/DataFixtureTest.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Annotation/_files/components/a/aa/aaa/registration.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Annotation/_files/components/a/aa/registration.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Annotation/_files/components/b/registration.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Annotation/_files/components/registration.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/ApplicationTest.php
M   dev/tests/integration/framework/tests/unit/testsuite/Magento/Test/Event/TransactionTest.php
M   dev/tests/integration/phpunit.xml.dist
M   dev/tests/integration/testsuite/Magento/AdminGws/Model/ControllersTest.php
M   dev/tests/integration/testsuite/Magento/AdminGws/Model/ModelsTest.php
M   dev/tests/integration/testsuite/Magento/AdminNotification/Controller/Adminhtml/Notification/MarkAsReadTest.php
M   dev/tests/integration/testsuite/Magento/AdvancedCheckout/Controller/Adminhtml/IndexTest.php
M   dev/tests/integration/testsuite/Magento/AdvancedCheckout/Controller/CartTest.php
M   dev/tests/integration/testsuite/Magento/AdvancedPricingImportExport/_files/create_products.php
M   dev/tests/integration/testsuite/Magento/AsynchronousOperations/_files/bulk.php
M   dev/tests/integration/testsuite/Magento/Authorizenet/Controller/Directpost/Payment/BackendResponseTest.php
M   dev/tests/integration/testsuite/Magento/Authorizenet/Model/DirectpostTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Block/Dashboard/GraphTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Block/Widget/Grid/MassactionTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Block/_files/design/adminhtml/Magento/test_default/registration.php
M   dev/tests/integration/testsuite/Magento/Backend/Controller/Adminhtml/AuthTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Controller/Adminhtml/CacheTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Controller/Adminhtml/Dashboard/ProductsViewedTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Controller/Adminhtml/DashboardTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Controller/Adminhtml/IndexTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Controller/Adminhtml/UrlRewriteTest.php
M   dev/tests/integration/testsuite/Magento/Backend/Model/UrlTest.php
M   dev/tests/integration/testsuite/Magento/Banner/Model/ResourceModel/BannerTest.php
M   dev/tests/integration/testsuite/Magento/Banner/Model/ResourceModel/Catalogrule/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Banner/_files/banner.php
M   dev/tests/integration/testsuite/Magento/Banner/_files/banner_catalog_rule.php
M   dev/tests/integration/testsuite/Magento/Banner/_files/banner_disabled_40_percent_off_rollback.php
M   dev/tests/integration/testsuite/Magento/Banner/_files/banner_enabled_40_to_50_percent_off_rollback.php
M   dev/tests/integration/testsuite/Magento/Banner/_files/banner_rollback.php
M   dev/tests/integration/testsuite/Magento/BannerCustomerSegment/Model/ResourceModel/BannerSegmentLinkTest.php
M   dev/tests/integration/testsuite/Magento/Braintree/Controller/Adminhtml/Invoice/CreateTest.php
M   dev/tests/integration/testsuite/Magento/Braintree/Controller/Adminhtml/Order/PaymentReviewTest.php
M   dev/tests/integration/testsuite/Magento/Braintree/Controller/Adminhtml/Payment/GetClientTokenTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Block/Catalog/Product/View/Type/BundleTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Category/ProductIndexerTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/DynamicBundlePriceCalculatorWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/FixedBundlePriceCalculatorWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/FixedBundleWithSpecialPriceCalculatorTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/FixedBundleWithTierPriceCalculatorTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/OptionListTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/PriceTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/PriceWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/Product/SaveHandlerTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/Model/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Bundle/_files/multiple_products.php
M   dev/tests/integration/testsuite/Magento/Bundle/_files/product.php
M   dev/tests/integration/testsuite/Magento/Bundle/_files/product_with_tier_pricing_rollback.php
M   dev/tests/integration/testsuite/Magento/Bundle/_files/quote_with_bundle_and_options.php
M   dev/tests/integration/testsuite/Magento/Bundle/_files/quote_with_bundle_and_options_rollback.php
M   dev/tests/integration/testsuite/Magento/BundleImportExport/Model/BundleStagingTest.php
M   dev/tests/integration/testsuite/Magento/BundleImportExport/Model/BundleTest.php
M   dev/tests/integration/testsuite/Magento/BundleImportExport/Model/Export/RowCustomizerTest.php
M   dev/tests/integration/testsuite/Magento/BundleImportExport/Model/Import/Product/Type/BundleTest.php
M   dev/tests/integration/testsuite/Magento/BundleImportExport/Model/Import/_files/import_bundle.csv
M   dev/tests/integration/testsuite/Magento/Captcha/Observer/CaseCaptchaIsRequiredAfterFailedLoginAttemptsTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Adminhtml/CategoryTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Adminhtml/Product/Action/AttributeTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Adminhtml/Product/AttributeTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Adminhtml/Product/Set/DeleteTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Adminhtml/Product/Set/SaveTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Adminhtml/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/CategoryTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/Product/CompareTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Controller/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Helper/OutputTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/CategoryTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/DesignTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ImageUploaderTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Indexer/Category/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Indexer/FlatTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Indexer/Product/Eav/Action/FullTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Indexer/Product/Flat/Action/RowTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Indexer/Product/Price/SimpleWithOptionsTierPriceWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Layer/CategoryTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Layer/Filter/Price/AlgorithmAdvancedTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Layer/Filter/Price/AlgorithmBaseTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Layer/Filter/Price/_files/products_advanced.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Layer/Filter/Price/_files/products_base.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/Attribute/Backend/TierpriceTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/Gallery/CreateHandlerTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/ImageTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/Option/Type/File/ValidatorFileTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/Option/Type/File/ValidatorInfoTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/Type/AbstractTypeTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/Product/Type/PriceWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ProductExternalTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ProductPriceTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ProductPriceWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ProductRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/Category/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/Product/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/Product/Indexer/Eav/SourceTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/_files/category_multiple_stores.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/_files/product_simple_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/Model/ResourceModel/_files/website_attribute_sync_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/Pricing/Render/FinalPriceBoxTest.php
M   dev/tests/integration/testsuite/Magento/Catalog/Ui/DataProvider/Product/Form/Modifier/_files/expected_categories.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/catalog_category_with_doublequotes.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/categories.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/category_duplicates.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/enable_catalog_product_reindex_schedule.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/enable_catalog_product_reindex_schedule_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/indexer_catalog_category_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/multiple_products.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/multiple_products_with_non_saleable_product.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/multiple_products_with_non_saleable_product_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/multiselect_attribute.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_image.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_multistore.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_out_of_stock.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_out_of_stock_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_with_custom_options.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_with_url_key_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_xss_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_virtual.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_virtual_in_stock.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_virtual_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_with_dropdown_option.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/product_with_options.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_crosssell.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_in_category.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_new.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_related.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_related_multiple.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_upsell.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_with_dropdown_attribute.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_with_dropdown_attribute_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_with_multiselect_attribute_rollback.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/products_with_unique_input_attribute.php
M   dev/tests/integration/testsuite/Magento/Catalog/_files/validate_image_info_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/AbstractProductExportImportTestCase.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Export/ProductTest.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/Product/Type/AbstractTest.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/ProductTest.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/UploaderTest.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/custom_attributes_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/custom_category_store_media_disabled.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/custom_category_store_media_disabled_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/import_media_existing_images.csv
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/import_media_two_stores.csv
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/import_new_categories_custom_separator.csv
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/import_new_categories_default_separator.csv
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/import_with_filesystem_images.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/product_with_custom_options_new.csv
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Import/_files/products_to_import_with_two_stores.csv
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/ProductStagingTest.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/ProductTest.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/Model/Version.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/_files/product_export_data.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/_files/product_export_data_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/_files/product_export_data_special_chars.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/_files/product_export_data_special_chars_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogImportExport/_files/product_export_with_product_links_data.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Block/Adminhtml/Form/Field/CustomergroupTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/Quote/Item/QuantityValidatorTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/ByStockItemRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductCreate/ByProductModel/ByQuantityAndStockStatusTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductCreate/ByProductModel/ByStockDataTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductCreate/ByProductModel/ByStockItemTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductCreate/ByProductRepository/ByQuantityAndStockStatusTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductCreate/ByProductRepository/ByStockDataTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductCreate/ByProductRepository/ByStockItemTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductUpdate/ByProductModel/ByStockItemTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/OnProductUpdate/ByProductRepository/ByStockItemTest.php
M   dev/tests/integration/testsuite/Magento/CatalogInventory/Model/StockItemSave/StockItemDataChecker.php
M   dev/tests/integration/testsuite/Magento/CatalogPermissions/Model/Indexer/ProductTest.php
M   dev/tests/integration/testsuite/Magento/CatalogPermissions/Model/Permission/IndexTest.php
M   dev/tests/integration/testsuite/Magento/CatalogPermissions/_files/permission.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/Model/Indexer/BatchIndexTest.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/Model/ResourceModel/Product/ConditionsToCollectionApplierTest.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/conditions_to_collection/attribute_sets.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/conditions_to_collection/attribute_sets_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/conditions_to_collection/categories.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/conditions_to_collection/categories_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/conditions_to_collection/products.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/conditions_to_collection/products_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/configurable_product.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/configurable_product_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/simple_products.php
M   dev/tests/integration/testsuite/Magento/CatalogRule/_files/simple_products_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Indexer/Fulltext/Action/DataProviderTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Indexer/Fulltext/Action/FullTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Indexer/Fulltext/Model/Plugin/CategoryTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Indexer/FulltextTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Indexer/IndexSwitcherMock.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Indexer/SwitcherUsedInFulltextTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Layer/Filter/CategoryTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/Model/Search/FilterMapper/CustomAttributeFilterTest.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/_files/product_configurable_with_single_child.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/_files/product_configurable_with_single_child_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/_files/product_for_search.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/_files/product_for_search_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogSearch/_files/searchable_attribute.php
M   dev/tests/integration/testsuite/Magento/CatalogStaging/Controller/Adminhtml/Product/BundleTest.php
M   dev/tests/integration/testsuite/Magento/CatalogStaging/Controller/Adminhtml/Product/SaveTest.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/Model/CategoryUrlRewriteGeneratorTest.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/Observer/ProductProcessUrlRewriteSavingObserverTest.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/_files/categories_with_product_ids_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/_files/product_rewrite_multistore.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/_files/product_rewrite_multistore_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/_files/product_simple_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/_files/product_with_category.php
M   dev/tests/integration/testsuite/Magento/CatalogUrlRewrite/_files/product_with_category_rollback.php
M   dev/tests/integration/testsuite/Magento/CatalogWidget/Block/Product/ProductListTest.php
M   dev/tests/integration/testsuite/Magento/CatalogWidget/Model/Rule/Condition/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Api/PaymentInformationManagementTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Controller/Cart/Index/CouponPostTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Controller/Cart/UpdateItemQtyTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Controller/CartTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Model/CartTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Model/SessionTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/Plugin/Model/Quote/ResetQuoteAddressesTest.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/active_quote.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/discount_10percent_generalusers.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_bundle_product_rollback.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_shipping_method.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_shipping_method_and_items_categories_rollback.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_simple_product_saved.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_simple_product_saved_rollback.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_virtual_product_and_address.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_virtual_product_and_address_rollback.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_virtual_product_saved.php
M   dev/tests/integration/testsuite/Magento/Checkout/_files/quote_with_virtual_product_saved_rollback.php
M   dev/tests/integration/testsuite/Magento/CheckoutAgreements/Model/Checkout/Plugin/GuestValidationTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Block/BlockTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Block/Widget/BlockTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Controller/Adminhtml/FulltextGridSearchTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Controller/Adminhtml/Wysiwyg/Images/DeleteFilesTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Controller/Adminhtml/Wysiwyg/Images/DeleteFolderTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Controller/Adminhtml/Wysiwyg/Images/NewFolderTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Controller/Adminhtml/Wysiwyg/Images/UploadTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Controller/RouterTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Helper/Wysiwyg/ImagesTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Model/BlockTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Model/PageTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Model/Wysiwyg/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Cms/Model/Wysiwyg/Images/StorageTest.php
M   dev/tests/integration/testsuite/Magento/Cms/_files/linked_media.php
M   dev/tests/integration/testsuite/Magento/Cms/_files/linked_media_rollback.php
M   dev/tests/integration/testsuite/Magento/Cms/_files/pages.php
M   dev/tests/integration/testsuite/Magento/Config/Block/System/Config/FieldArray.php
M   dev/tests/integration/testsuite/Magento/Config/Block/System/Config/FormTest.php
M   dev/tests/integration/testsuite/Magento/Config/Console/Command/ConfigSetCommandTest.php
M   dev/tests/integration/testsuite/Magento/Config/Console/Command/ConfigShowCommandTest.php
M   dev/tests/integration/testsuite/Magento/Config/Controller/Adminhtml/System/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableImportExport/Model/ConfigurableStagingTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableImportExport/Model/ConfigurableTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableImportExport/Model/Import/Product/Type/ConfigurableTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Controller/Adminhtml/ProductTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Controller/CartTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Model/Product/SaveHandlerTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Model/Product/VariationHandlerTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Model/ResourceModel/Product/Indexer/Price/ConfigurableTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Pricing/Price/SpecialPriceIndexerWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Pricing/Render/FinalPriceBox/RenderingBasedOnIsProductListFlagTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Pricing/Render/FinalPriceBox/RenderingBasedOnIsProductListFlagWithDimensionTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/Ui/DataProvider/Product/Form/Modifier/Data/AssociatedProductsTest.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/configurable_attribute_with_source_model.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/configurable_attribute_with_source_model_rollback.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/product_configurable_custom.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/product_configurable_custom_rollback.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/product_simple_77_rollback.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/quote_with_configurable_product_last_variation.php
M   dev/tests/integration/testsuite/Magento/ConfigurableProduct/_files/tax_rule_rollback.php
M   dev/tests/integration/testsuite/Magento/Contact/Controller/IndexTest.php
M   dev/tests/integration/testsuite/Magento/Cron/Observer/ProcessCronQueueObserverTest.php
M   dev/tests/integration/testsuite/Magento/CurrencySymbol/Controller/Adminhtml/System/Currency/FetchRatesTest.php
M   dev/tests/integration/testsuite/Magento/CurrencySymbol/Controller/Adminhtml/System/Currency/SaveRatesTest.php
M   dev/tests/integration/testsuite/Magento/CurrencySymbol/Controller/Adminhtml/System/Currencysymbol/SaveTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Api/AddressRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Address/BookTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Adminhtml/Edit/Tab/View/CartTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Adminhtml/Edit/Tab/View/PersonalInfoTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Adminhtml/Edit/Tab/View/SalesTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Form/RegisterTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Widget/GenderTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Block/Widget/TaxvatTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/AccountTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/AddressTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/Cart/Product/Composite/CartTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/GroupTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/Index/MassAssignGroupTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/Index/MassDeleteTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/Index/MassSubscribeTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/Index/ResetPasswordTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Adminhtml/IndexTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/AjaxLoginTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Controller/Section/LoadTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/AccountManagementTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/AddressTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/Config/Source/Group/MultiselectTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/CustomerMetadataTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/CustomerRegistryTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/GroupRegistryTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/ResourceModel/AddressRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/ResourceModel/CustomerRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/ResourceModel/Grid/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/ResourceModel/Group/Grid/ServiceCollectionTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/ResourceModel/GroupRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Customer/Model/VisitorTest.php
M   dev/tests/integration/testsuite/Magento/Customer/_files/customer_non_default_website_id.php
M   dev/tests/integration/testsuite/Magento/Customer/_files/customer_sample.php
M   dev/tests/integration/testsuite/Magento/Customer/_files/customer_with_website_rollback.php
M   dev/tests/integration/testsuite/Magento/CustomerBalance/Model/CreditMemoResolverTest.php
M   dev/tests/integration/testsuite/Magento/CustomerBalance/Observer/CreditmemoDataImportObserverTest.php
M   dev/tests/integration/testsuite/Magento/CustomerBalance/Observer/CreditmemoSaveAfterObserverTest.php
M   dev/tests/integration/testsuite/Magento/CustomerBalance/Plugin/Model/Quote/ResetCustomerBalanceUsageTest.php
M   dev/tests/integration/testsuite/Magento/CustomerBalance/_files/invoiced_order_with_customer_balance_and_item.php
M   dev/tests/integration/testsuite/Magento/CustomerCustomAttributes/Controller/Adminhtml/Customer/Address/Attribute/SaveTest.php
M   dev/tests/integration/testsuite/Magento/CustomerCustomAttributes/Model/AddressAttributeTest.php
M   dev/tests/integration/testsuite/Magento/CustomerFinance/Model/Import/Eav/Customer/FinanceTest.php
M   dev/tests/integration/testsuite/Magento/CustomerFinance/Model/ResourceModel/Customer/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/CustomerImportExport/Model/Export/AddressTest.php
M   dev/tests/integration/testsuite/Magento/CustomerImportExport/Model/Import/AddressTest.php
M   dev/tests/integration/testsuite/Magento/CustomerImportExport/Model/Import/CustomAddressTest.php
M   dev/tests/integration/testsuite/Magento/CustomerImportExport/Model/Import/CustomerTest.php
M   dev/tests/integration/testsuite/Magento/CustomerImportExport/_files/two_addresses.php
M   dev/tests/integration/testsuite/Magento/CustomerImportExport/_files/two_addresses_rollback.php
M   dev/tests/integration/testsuite/Magento/CustomerSegment/Model/Segment/Condition/Product/AttributesTest.php
M   dev/tests/integration/testsuite/Magento/Cybersource/Api/PaymentInformationManagementTest.php
M   dev/tests/integration/testsuite/Magento/Cybersource/Fixtures/payment_method.php
M   dev/tests/integration/testsuite/Magento/Cybersource/Fixtures/quote_with_split_items.php
M   dev/tests/integration/testsuite/Magento/Cybersource/Model/MultishippingTest.php
M   dev/tests/integration/testsuite/Magento/Deploy/Console/Command/App/ApplicationDumpCommandTest.php
M   dev/tests/integration/testsuite/Magento/Deploy/DeployTest.php
M   dev/tests/integration/testsuite/Magento/Deploy/_files/theme.php
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom1/composer.json
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom1/etc/view.xml
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom1/registration.php
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom2/composer.json
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom2/registration.php
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom3/composer.json
M   dev/tests/integration/testsuite/Magento/Deploy/_files/zoom3/registration.php
M   dev/tests/integration/testsuite/Magento/Developer/Model/Logger/Handler/DebugTest.php
M   dev/tests/integration/testsuite/Magento/Directory/Model/Country/Postcode/ValidatorTest.php
M   dev/tests/integration/testsuite/Magento/Directory/Model/CurrencyConfigTest.php
M   dev/tests/integration/testsuite/Magento/Downloadable/Block/Adminhtml/Catalog/Product/Edit/Tab/Downloadable/LinksTest.php
M   dev/tests/integration/testsuite/Magento/Downloadable/Block/Adminhtml/Catalog/Product/Edit/Tab/Downloadable/SamplesTest.php
M   dev/tests/integration/testsuite/Magento/Downloadable/_files/order_with_downloadable_product.php
M   dev/tests/integration/testsuite/Magento/Downloadable/_files/order_with_downloadable_product_rollback.php
M   dev/tests/integration/testsuite/Magento/Downloadable/_files/order_with_downloadable_product_with_additional_options.php
M   dev/tests/integration/testsuite/Magento/Downloadable/_files/order_with_downloadable_product_with_additional_options_rollback.php
M   dev/tests/integration/testsuite/Magento/Downloadable/_files/product_downloadable.php
M   dev/tests/integration/testsuite/Magento/DownloadableImportExport/Model/DownloadableStagingTest.php
M   dev/tests/integration/testsuite/Magento/DownloadableImportExport/Model/DownloadableTest.php
M   dev/tests/integration/testsuite/Magento/Eav/Model/Entity/Attribute/Frontend/DefaultFrontendTest.php
M   dev/tests/integration/testsuite/Magento/Eav/Model/Entity/AttributeTest.php
M   dev/tests/integration/testsuite/Magento/Eav/Model/ResourceModel/Entity/Attribute/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Eav/Model/Validator/Attribute/BackendTest.php
M   dev/tests/integration/testsuite/Magento/Eav/Setup/EavSetupTest.php
M   dev/tests/integration/testsuite/Magento/Elasticsearch/Model/Client/ElasticsearchTest.php
M   dev/tests/integration/testsuite/Magento/Elasticsearch/Model/Indexer/IndexHandlerTest.php
M   dev/tests/integration/testsuite/Magento/Elasticsearch/Model/Indexer/ReindexAllTest.php
M   dev/tests/integration/testsuite/Magento/Elasticsearch/SearchAdapter/AdapterTest.php
M   dev/tests/integration/testsuite/Magento/Elasticsearch/_files/configurable_attribute.php
M   dev/tests/integration/testsuite/Magento/Elasticsearch/_files/configurable_attribute_rollback.php
M   dev/tests/integration/testsuite/Magento/Email/Block/Adminhtml/Template/Edit/FormTest.php
M   dev/tests/integration/testsuite/Magento/Email/Model/Template/FilterTest.php
M   dev/tests/integration/testsuite/Magento/Email/Model/TemplateTest.php
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/adminhtml/Magento/default/Magento_Email/templates/sample_email_content.phtml
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/adminhtml/Magento/default/Magento_ProductAlert/email/cron_error.html
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/adminhtml/Magento/default/registration.php
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/adminhtml/Vendor/custom_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/adminhtml/Vendor/default/registration.php
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Magento/default/Magento_Customer/email/account_new_confirmed.html
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Magento/default/Magento_Email/templates/sample_email_content.phtml
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Magento/default/Magento_Email/templates/sample_email_content_custom.phtml
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Magento/default/registration.php
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Vendor/custom_theme/Magento_Customer/email/account_new.html
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Vendor/custom_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Vendor/default/Magento_Customer/email/account_new_confirmation.html
M   dev/tests/integration/testsuite/Magento/Email/Model/_files/design/frontend/Vendor/default/registration.php
M   dev/tests/integration/testsuite/Magento/EncryptionKey/Controller/Adminhtml/Crypt/Key/SaveTest.php
M   dev/tests/integration/testsuite/Magento/EncryptionKey/Model/ResourceModel/Key/ChangeTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Api/AbstractExtensibleObjectTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Api/ExtensionAttribute/JoinProcessorTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Api/ExtensionAttributesFactoryTest.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Filesystem/CreatePdfFileTest.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Filesystem/DirectoryResolverTest.php
M   dev/tests/integration/testsuite/Magento/Framework/App/FrontControllerTest.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/bar/en_gb/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/bar/en_us/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/baz/en_gb/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/first/en_us/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/foo/en_au/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/my/ru_ru/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/second/en_gb/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Language/_files/theirs/ru_ru/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Utility/_files/fixtures/language/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Utility/_files/fixtures/library/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Utility/_files/fixtures/module/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/App/Utility/_files/fixtures/theme/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/Code/GeneratorTest/ParentClassWithNamespace.php
M   dev/tests/integration/testsuite/Magento/Framework/Code/GeneratorTest/SourceClassWithNamespace.php
M   dev/tests/integration/testsuite/Magento/Framework/Code/Reader/SourceArgumentsReaderTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Code/Reader/_files/SourceArgumentsReaderTest.php.sample
M   dev/tests/integration/testsuite/Magento/Framework/Code/_expected/SourceClassWithNamespaceExtensionInterfaceFactory.php.sample
M   dev/tests/integration/testsuite/Magento/Framework/Code/_expected/SourceClassWithNamespaceFactory.php.sample
M   dev/tests/integration/testsuite/Magento/Framework/Code/_expected/SourceClassWithNamespaceInterceptor.php.sample
M   dev/tests/integration/testsuite/Magento/Framework/Code/_expected/SourceClassWithNamespaceProxy.php.sample
M   dev/tests/integration/testsuite/Magento/Framework/Communication/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Composer/RemoveTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Composer/_files/testFromClone/composer.json
M   dev/tests/integration/testsuite/Magento/Framework/Composer/_files/testFromCreateProject/composer.json
M   dev/tests/integration/testsuite/Magento/Framework/Composer/_files/testSkeleton/composer.json
M   dev/tests/integration/testsuite/Magento/Framework/Config/ConverterTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Css/PreProcessor/Adapter/CssInlinerTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Css/PreProcessor/File/Collector/AggregatedTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Css/PreProcessor/_files/code/Magento/Other/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/Css/PreProcessor/_files/code/Magento/Third/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/Css/PreProcessor/_files/design/frontend/Test/default/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/Css/PreProcessor/_files/design/frontend/Test/parent/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/DB/Adapter/Pdo/MysqlTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Data/Form/Element/DateTest.php
M   dev/tests/integration/testsuite/Magento/Framework/DataObject/CopyTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Encryption/EncryptorTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Encryption/ModelTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Filesystem/Directory/ReadTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Filesystem/Directory/WriteTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Filesystem/Driver/FileTest.php
M   dev/tests/integration/testsuite/Magento/Framework/ForeignKey/ForeignKeyResolverTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Interception/AbstractPlugin.php
M   dev/tests/integration/testsuite/Magento/Framework/Interception/Fixture/Intercepted.php
M   dev/tests/integration/testsuite/Magento/Framework/Interception/Fixture/InterceptedInterface.php
M   dev/tests/integration/testsuite/Magento/Framework/Interception/Fixture/InterceptedParent.php
M   dev/tests/integration/testsuite/Magento/Framework/Interception/Fixture/InterceptedParentInterface.php
M   dev/tests/integration/testsuite/Magento/Framework/Lock/Backend/DatabaseTest.php
M   dev/tests/integration/testsuite/Magento/Framework/MessageQueue/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Framework/MessageQueue/TopologyTest.php
M   dev/tests/integration/testsuite/Magento/Framework/MessageQueue/UseCase/QueueTestCaseAbstract.php
M   dev/tests/integration/testsuite/Magento/Framework/MessageQueue/_files/communication.xml
M   dev/tests/integration/testsuite/Magento/Framework/MessageQueue/_files/valid_expected_queue.php
M   dev/tests/integration/testsuite/Magento/Framework/MessageQueue/_files/valid_queue_input.php
M   dev/tests/integration/testsuite/Magento/Framework/Model/ResourceModel/Db/AbstractTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Model/ResourceModel/Db/Collection/AbstractTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Model/ResourceModel/Db/ProfilerTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Module/Plugin/DbStatusValidatorTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Mview/View/ChangelogTest.php
M   dev/tests/integration/testsuite/Magento/Framework/ObjectManager/ObjectManagerTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Search/Adapter/Mysql/AdapterTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Search/_files/filterable_attributes.php
M   dev/tests/integration/testsuite/Magento/Framework/Search/_files/filterable_attributes_rollback.php
M   dev/tests/integration/testsuite/Magento/Framework/Search/_files/products_rollback.php
M   dev/tests/integration/testsuite/Magento/Framework/Session/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Session/SaveHandlerTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Session/SessionManagerTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Session/SidResolverTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Stdlib/Cookie/CookieScopeTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Stdlib/Cookie/PhpCookieReaderTest.php
M   dev/tests/integration/testsuite/Magento/Framework/Stdlib/DateTime/Filter/DateTimeTest.php
M   dev/tests/integration/testsuite/Magento/Framework/TranslateCachingTest.php
M   dev/tests/integration/testsuite/Magento/Framework/TranslateTest.php
M   dev/tests/integration/testsuite/Magento/Framework/View/Layout/MergeTest.php
M   dev/tests/integration/testsuite/Magento/Framework/View/LayoutDirectivesTest.php
M   dev/tests/integration/testsuite/Magento/Framework/View/Model/Layout/MergeTest.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/Fixture_Module/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/UiComponent/theme/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/fallback/app/code/ViewTest_Module/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/fallback/design/frontend/Vendor/custom_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/fallback/design/frontend/Vendor/custom_theme2/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/fallback/design/frontend/Vendor/default/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/fallback/design/frontend/Vendor/standalone_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Framework/View/_files/static/theme/registration.php
M   dev/tests/integration/testsuite/Magento/GiftCard/Model/Catalog/Product/Type/GiftCardTest.php
M   dev/tests/integration/testsuite/Magento/GiftCard/Observer/GenerateGiftCardAccountsTest.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/gift_card_physical_with_fixed_amount_10.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/gift_card_physical_with_fixed_amount_10_rollback.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/gift_card_physical_with_fixed_amount_50.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/gift_card_physical_with_fixed_amount_50_rollback.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/gift_card_with_amount.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/gift_card_with_open_amount.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/quote.php
M   dev/tests/integration/testsuite/Magento/GiftCard/_files/quote_rollback.php
M   dev/tests/integration/testsuite/Magento/GiftCardAccount/Api/GiftCardAccountRepositoryInterfaceTest.php
M   dev/tests/integration/testsuite/Magento/GiftCardAccount/Observer/CreditmemoSaveAfterTest.php
M   dev/tests/integration/testsuite/Magento/GiftCardAccount/_files/invoiced_order_with_gift_card_account_and_item.php
M   dev/tests/integration/testsuite/Magento/GiftCardAccount/_files/order_with_gift_card_account.php
M   dev/tests/integration/testsuite/Magento/GiftCardImportExport/Model/GiftCardTest.php
M   dev/tests/integration/testsuite/Magento/GiftCardImportExport/Model/Import/Product/Type/GiftCardTest.php
M   dev/tests/integration/testsuite/Magento/GiftMessage/Model/OrderItemRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/GiftMessage/Model/OrderRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/GiftMessage/_files/quote_with_item_message_rollback.php
M   dev/tests/integration/testsuite/Magento/GiftWrapping/_files/order_with_giftwrapping.php
M   dev/tests/integration/testsuite/Magento/GoogleAnalytics/Block/GaTest.php
M   dev/tests/integration/testsuite/Magento/GroupedImportExport/Model/GroupedStagingTest.php
M   dev/tests/integration/testsuite/Magento/GroupedImportExport/Model/GroupedTest.php
M   dev/tests/integration/testsuite/Magento/GroupedProduct/Model/Product/Type/GroupedTest.php
M   dev/tests/integration/testsuite/Magento/GroupedProduct/_files/product_grouped.php
M   dev/tests/integration/testsuite/Magento/ImportExport/Controller/Adminhtml/Import/ValidateTest.php
M   dev/tests/integration/testsuite/Magento/ImportExport/Model/Export/EntityAbstractTest.php
M   dev/tests/integration/testsuite/Magento/ImportExport/Model/ImportTest.php
M   dev/tests/integration/testsuite/Magento/ImportExport/_files/product.php
M   dev/tests/integration/testsuite/Magento/Integration/Controller/Adminhtml/IntegrationTest.php
M   dev/tests/integration/testsuite/Magento/Integration/Model/AdminTokenServiceTest.php
M   dev/tests/integration/testsuite/Magento/Integration/Model/Config/Consolidated/_files/integration.php
M   dev/tests/integration/testsuite/Magento/Integration/Model/CustomerTokenServiceTest.php
M   dev/tests/integration/testsuite/Magento/Logging/Controller/Adminhtml/Logging/ArchiveGridTest.php
M   dev/tests/integration/testsuite/Magento/MediaStorage/Model/File/Storage/ResponseTest.php
M   dev/tests/integration/testsuite/Magento/MessageQueue/Model/Cron/ConsumersRunnerTest.php
M   dev/tests/integration/testsuite/Magento/MultipleWishlist/Model/ResourceModel/Item/Report/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Block/Checkout/Address/SelectTest.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Block/Checkout/OverviewTest.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Controller/Checkout/CheckItemsTest.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/billing_address.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/items.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/items_rollback.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/payment_method.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/quote.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/quote_rollback.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/quote_with_split_items.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/shipping_address_list.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/simple_product_10.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/simple_product_10_rollback.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/simple_product_20.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/simple_product_20_rollback.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/virtual_product_5.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Fixtures/virtual_product_5_rollback.php
M   dev/tests/integration/testsuite/Magento/Multishipping/Model/Checkout/Type/MultishippingTest.php
M   dev/tests/integration/testsuite/Magento/MysqlMq/Model/PublisherConsumerTest.php
M   dev/tests/integration/testsuite/Magento/MysqlMq/Model/QueueManagementTest.php
M   dev/tests/integration/testsuite/Magento/NewRelicReporting/Plugin/SeparateAppsTest.php
M   dev/tests/integration/testsuite/Magento/Newsletter/Controller/Adminhtml/NewsletterQueueTest.php
M   dev/tests/integration/testsuite/Magento/Newsletter/Controller/Adminhtml/NewsletterTemplateTest.php
M   dev/tests/integration/testsuite/Magento/Newsletter/Controller/ManageTest.php
M   dev/tests/integration/testsuite/Magento/Newsletter/Controller/SubscriberTest.php
M   dev/tests/integration/testsuite/Magento/Newsletter/Model/Plugin/PluginTest.php
M   dev/tests/integration/testsuite/Magento/Newsletter/Model/SubscriberTest.php
M   dev/tests/integration/testsuite/Magento/PageCache/Model/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Controller/Adminhtml/Express/AuthorizationTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Controller/ExpressTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Controller/Payflow/SilentPostTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Controller/PayflowTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Controller/PayflowadvancedTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/default_payment_configuration.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/default_payment_configuration_rollback.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/process_config_data.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/store_payment_configuration.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/store_payment_configuration_rollback.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/website_payment_configuration.php
M   dev/tests/integration/testsuite/Magento/Paypal/Fixtures/website_payment_configuration_rollback.php
M   dev/tests/integration/testsuite/Magento/Paypal/Model/Express/CheckoutTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Model/IpnTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Model/Payflow/Service/Request/SecureTokenTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/Model/Payment/Method/Billing/AbstractAgreementTest.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/fixed_discount_rollback.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/order_express.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/order_express_payment_action_order.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/order_payflowpro.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/quote_express.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/quote_express_configurable.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/quote_payflowpro_rollback.php
M   dev/tests/integration/testsuite/Magento/Paypal/_files/virtual_quote_with_empty_billing_address.php
M   dev/tests/integration/testsuite/Magento/Persistent/Block/Header/AdditionalTest.php
M   dev/tests/integration/testsuite/Magento/Persistent/Model/ObserverTest.php
M   dev/tests/integration/testsuite/Magento/ProductAlert/Model/EmailTest.php
M   dev/tests/integration/testsuite/Magento/ProductAlert/Model/ObserverTest.php
M   dev/tests/integration/testsuite/Magento/Quote/Model/Quote/AddressTest.php
M   dev/tests/integration/testsuite/Magento/Quote/Model/QuoteManagementTest.php
M   dev/tests/integration/testsuite/Magento/Quote/Model/QuoteRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Quote/Model/QuoteTest.php
M   dev/tests/integration/testsuite/Magento/Quote/Model/QuoteValidatorTest.php
M   dev/tests/integration/testsuite/Magento/Quote/Model/ShippingMethodManagementTest.php
M   dev/tests/integration/testsuite/Magento/Reminder/Model/ResourceModel/Rule/TemplateTest.php
M   dev/tests/integration/testsuite/Magento/Reminder/Model/ResourceModel/RuleTest.php
M   dev/tests/integration/testsuite/Magento/Reminder/_files/rules.php
M   dev/tests/integration/testsuite/Magento/Reports/Block/Adminhtml/GridTest.php
M   dev/tests/integration/testsuite/Magento/Reports/Block/Adminhtml/Shopcart/Abandoned/GridTest.php
M   dev/tests/integration/testsuite/Magento/Reports/Controller/Adminhtml/Report/Product/ViewedTest.php
M   dev/tests/integration/testsuite/Magento/Reports/_files/viewed_products.php
M   dev/tests/integration/testsuite/Magento/Review/Block/Adminhtml/Edit/FormTest.php
M   dev/tests/integration/testsuite/Magento/Review/Model/ResourceModel/Review/Product/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/Review/_files/different_reviews.php
M   dev/tests/integration/testsuite/Magento/Reward/Observer/SaveRewardPointsTest.php
M   dev/tests/integration/testsuite/Magento/Rma/Controller/GuestTest.php
M   dev/tests/integration/testsuite/Magento/Rma/Controller/ReturnsTest.php
M   dev/tests/integration/testsuite/Magento/Rma/Model/RmaTest.php
M   dev/tests/integration/testsuite/Magento/Rma/_files/rma_rollback.php
M   dev/tests/integration/testsuite/Magento/Rule/Model/Condition/Sql/BuilderTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Api/OrderCustomerDelegateInterfaceTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Block/Adminhtml/Order/Create/Billing/Method/FormTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Block/Adminhtml/Order/Create/Form/AccountTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Block/Adminhtml/Order/Create/FormTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Block/Adminhtml/Order/View/InfoTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Controller/Adminhtml/Order/Create/SaveTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Controller/Adminhtml/Order/CreateTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Controller/Adminhtml/Order/CreditmemoTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/GridAsyncInsertTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Order/Address/RendererTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Order/AddressRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Order/CreditmemoFactoryTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Order/Email/Sender/ShipmentSenderTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Order/Reorder/UnavailableProductsProviderTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Order/ShipmentTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/OrderIncrementIdCheckerTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/ResourceModel/Order/StatusTest.php
M   dev/tests/integration/testsuite/Magento/Sales/Model/Service/PaymentFailuresServiceTest.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/default_rollback.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/invoice_with_bundle.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/invoice_with_bundle_rollback.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_different_addresses.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_info.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_item_with_configurable_for_reorder.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_list.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_list_rollback.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_with_bundle_and_invoiced.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_with_bundle_and_invoiced_rollback.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/order_with_shipping_and_invoice.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/quote.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/quote_rollback.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/quote_with_two_products_and_customer.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/shipment.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/shipment_comments_for_search.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/shipment_items_for_search.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/shipment_list.php
M   dev/tests/integration/testsuite/Magento/Sales/_files/shipment_tracks_for_search.php
M   dev/tests/integration/testsuite/Magento/SalesArchive/Controller/Adminhtml/Archive/AddTest.php
M   dev/tests/integration/testsuite/Magento/SalesArchive/Controller/Adminhtml/Archive/MassAddTest.php
M   dev/tests/integration/testsuite/Magento/SalesArchive/Model/QuoteManagementTest.php
M   dev/tests/integration/testsuite/Magento/SalesRule/Model/Rule/Action/Discount/CartFixedTest.php
M   dev/tests/integration/testsuite/Magento/SalesRule/Model/Rule/Condition/ProductTest.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/cart_rule_100_percent_off.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/cart_rule_100_percent_off_rollback.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/cart_rule_40_percent_off_rollback.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/cart_rule_50_percent_off_rollback.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/coupon_cart_fixed_discount.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/coupons_advanced.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/rules_group_any_categories_rollback.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/rules_sku_exclude.php
M   dev/tests/integration/testsuite/Magento/SalesRule/_files/rules_sku_exclude_rollback.php
M   dev/tests/integration/testsuite/Magento/SampleData/_files/Modules/FirstModule/composer.json
M   dev/tests/integration/testsuite/Magento/SampleData/_files/Modules/SecondModule/composer.json
M   dev/tests/integration/testsuite/Magento/SampleData/_files/Modules/ThirdModule/composer.json
M   dev/tests/integration/testsuite/Magento/ScalableInventory/Model/ResourceModel/QtyCounterTest.php
M   dev/tests/integration/testsuite/Magento/ScheduledImportExport/Cron/ScheduledLogCleanTest.php
M   dev/tests/integration/testsuite/Magento/Search/Model/SynonymReaderTest.php
M   dev/tests/integration/testsuite/Magento/Security/Model/SecurityManagerTest.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/DependenciesShowFrameworkCommandTest.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/PriceIndexerDimensionsModeSetCommandTest.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/phrases/TestPhrases.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/A/composer.json
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/A/etc/module.xml
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/A/registration.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/B/composer.json
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/B/etc/module.xml
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/B/registration.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/C/registration.php
M   dev/tests/integration/testsuite/Magento/Setup/Console/Command/_files/root/app/code/Magento/D/registration.php
M   dev/tests/integration/testsuite/Magento/Setup/Model/FixtureGenerator/ProductGeneratorTest.php
M   dev/tests/integration/testsuite/Magento/Setup/Model/_files/testSkeleton/composer.json
M   dev/tests/integration/testsuite/Magento/Setup/Module/DataSetupTest.php
M   dev/tests/integration/testsuite/Magento/Setup/Module/I18n/Dictionary/GeneratorTest.php
M   dev/tests/integration/testsuite/Magento/Signifyd/Block/Adminhtml/CaseInfoTest.php
M   dev/tests/integration/testsuite/Magento/Signifyd/Model/SignifydGateway/Request/CreateCaseBuilderTest.php
M   dev/tests/integration/testsuite/Magento/Signifyd/Observer/PlaceOrderTest.php
M   dev/tests/integration/testsuite/Magento/Sitemap/Model/ResourceModel/Catalog/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Sitemap/_files/sitemap_products.php
M   dev/tests/integration/testsuite/Magento/Staging/Model/ResourceModel/Db/UpdateTest.php
M   dev/tests/integration/testsuite/Magento/Staging/Model/SynchronizeEntityPeriodTest.php
M   dev/tests/integration/testsuite/Magento/Staging/Model/Update/CleanerTest.php
M   dev/tests/integration/testsuite/Magento/Staging/Model/Update/Grid/SearchResultTest.php
M   dev/tests/integration/testsuite/Magento/Staging/_files/staging_entity_with_updates.php
M   dev/tests/integration/testsuite/Magento/Staging/_files/staging_temporary_update.php
M   dev/tests/integration/testsuite/Magento/Staging/_files/staging_temporary_update_rollback.php
M   dev/tests/integration/testsuite/Magento/Store/App/FrontController/Plugin/RequestPreprocessorTest.php
M   dev/tests/integration/testsuite/Magento/Store/App/Request/PathInfoProcessorTest.php
M   dev/tests/integration/testsuite/Magento/Store/Model/StoreSwitcherTest.php
M   dev/tests/integration/testsuite/Magento/Store/Model/StoreTest.php
M   dev/tests/integration/testsuite/Magento/Store/_files/core_second_third_fixturestore_rollback.php
M   dev/tests/integration/testsuite/Magento/Store/_files/second_store.php
M   dev/tests/integration/testsuite/Magento/Store/_files/store.php
M   dev/tests/integration/testsuite/Magento/Store/_files/websites_different_countries.php
M   dev/tests/integration/testsuite/Magento/Store/_files/websites_different_countries_rollback.php
M   dev/tests/integration/testsuite/Magento/Swatches/Controller/Adminhtml/Product/AttributeTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/Model/IndexTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/Model/Indexer/TargetRule/Product/Rule/Action/RowTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/Model/Indexer/TargetRule/Product/Rule/Action/RowsTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/Model/Indexer/TargetRule/Rule/Product/Action/RowTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/Model/ResourceModel/IndexTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/Model/ResourceModel/Rule/CollectionTest.php
M   dev/tests/integration/testsuite/Magento/TargetRule/_files/products_rollback.php
M   dev/tests/integration/testsuite/Magento/TargetRule/_files/products_with_attributes.php
M   dev/tests/integration/testsuite/Magento/TargetRule/_files/products_with_attributes_rollback.php
M   dev/tests/integration/testsuite/Magento/TargetRule/_files/upsell_rule_with_customer_segment.php
M   dev/tests/integration/testsuite/Magento/Tax/Controller/Adminhtml/RateTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/Calculation/RateRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/ClassTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/Rate/ProviderTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/Sales/Total/Quote/SetupUtil.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/Sales/Total/Quote/SubtotalTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/Sales/Total/Quote/TaxTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/TaxClass/RepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Model/TaxRuleRepositoryTest.php
M   dev/tests/integration/testsuite/Magento/Tax/Pricing/AdjustmentTest.php
M   dev/tests/integration/testsuite/Magento/Tax/_files/scenarios/including_tax_apply_tax_after_discount.php
M   dev/tests/integration/testsuite/Magento/Tax/_files/tax_calculation_data_aggregated.php
M   dev/tests/integration/testsuite/Magento/Tax/_files/tax_classes_rollback.php
M   dev/tests/integration/testsuite/Magento/Test/Design/Frontend/Enterprise/Fixed/Enterprise/GiftRegistry/Magento/Catalog/ProductTest.php
M   dev/tests/integration/testsuite/Magento/Test/Integrity/LayoutTest.php
M   dev/tests/integration/testsuite/Magento/Test/Integrity/Modular/BlockInstantiationTest.php
M   dev/tests/integration/testsuite/Magento/Test/Integrity/Modular/LayoutFilesTest.php
M   dev/tests/integration/testsuite/Magento/Test/Integrity/Modular/TemplateFilesTest.php
M   dev/tests/integration/testsuite/Magento/Test/Integrity/StaticFilesTest.php
M   dev/tests/integration/testsuite/Magento/Theme/Controller/Adminhtml/System/Design/Config/SaveTest.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/Config/ValidatorTest.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/adminhtml/Vendor/test/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/area_two/Vendor/theme_one/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/design_area/Vendor/theme_one/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Magento/default/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Magento/default_iphone/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Test/cache_test_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Test/default/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Test/publication/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Test/test_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Vendor/custom_theme/registration.php
M   dev/tests/integration/testsuite/Magento/Theme/Model/_files/design/frontend/Vendor/default/registration.php
M   dev/tests/integration/testsuite/Magento/Translation/Model/_files/Magento/design/Magento/theme/i18n/en_US.csv
M   dev/tests/integration/testsuite/Magento/Ui/Config/ConverterTest.php
M   dev/tests/integration/testsuite/Magento/Ups/Model/CarrierTest.php
M   dev/tests/integration/testsuite/Magento/UrlRewrite/Block/Catalog/Category/TreeTest.php
M   dev/tests/integration/testsuite/Magento/UrlRewrite/Controller/UrlRewriteTest.php
M   dev/tests/integration/testsuite/Magento/UrlRewrite/Model/StoreSwitcher/RewriteUrlTest.php
M   dev/tests/integration/testsuite/Magento/UrlRewrite/_files/url_rewrite.php
M   dev/tests/integration/testsuite/Magento/UrlRewrite/_files/url_rewrite_rollback.php
M   dev/tests/integration/testsuite/Magento/User/Controller/Adminhtml/AuthTest.php
M   dev/tests/integration/testsuite/Magento/User/Controller/Adminhtml/Locks/GridTest.php
M   dev/tests/integration/testsuite/Magento/User/Controller/Adminhtml/Locks/IndexTest.php
M   dev/tests/integration/testsuite/Magento/User/Controller/Adminhtml/Locks/MassUnlockTest.php
M   dev/tests/integration/testsuite/Magento/User/Controller/Adminhtml/User/InvalidateTokenTest.php
M   dev/tests/integration/testsuite/Magento/User/Controller/Adminhtml/UserTest.php
M   dev/tests/integration/testsuite/Magento/User/Model/UserTest.php
M   dev/tests/integration/testsuite/Magento/Usps/Api/GuestCouponManagementTest.php
M   dev/tests/integration/testsuite/Magento/Usps/Fixtures/cart_rule_coupon_free_shipping.php
M   dev/tests/integration/testsuite/Magento/Variable/Model/VariableTest.php
M   dev/tests/integration/testsuite/Magento/Vault/Model/ResourceModel/PaymentTokenTest.php
M   dev/tests/integration/testsuite/Magento/Vault/_files/payment_tokens.php
M   dev/tests/integration/testsuite/Magento/Version/Controller/Index/IndexTest.php
M   dev/tests/integration/testsuite/Magento/VersionsCms/Block/Adminhtml/Cms/Hierarchy/Edit/FormTest.php
M   dev/tests/integration/testsuite/Magento/VisualMerchandiser/Model/Category/ProductsTest.php
M   dev/tests/integration/testsuite/Magento/Webapi/Controller/PathProcessorTest.php
M   dev/tests/integration/testsuite/Magento/Webapi/Model/Config/_files/webapi.php
M   dev/tests/integration/testsuite/Magento/Webapi/Model/Config/_files/webapiA.xml
M   dev/tests/integration/testsuite/Magento/Webapi/Model/Soap/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Webapi/_files/webapi_user.php
M   dev/tests/integration/testsuite/Magento/Weee/Model/ResourceModel/AttributeTest.php
M   dev/tests/integration/testsuite/Magento/Weee/Model/TaxTest.php
M   dev/tests/integration/testsuite/Magento/Weee/_files/fixed_product_attribute.php
M   dev/tests/integration/testsuite/Magento/Weee/_files/product_with_fpt.php
M   dev/tests/integration/testsuite/Magento/Widget/Controller/Adminhtml/Widget/InstanceTest.php
M   dev/tests/integration/testsuite/Magento/Widget/Controller/Adminhtml/WidgetTest.php
M   dev/tests/integration/testsuite/Magento/Widget/Model/Config/ReaderTest.php
M   dev/tests/integration/testsuite/Magento/Widget/Model/Template/FilterTest.php
M   dev/tests/integration/testsuite/Magento/Widget/Model/Widget/ConfigTest.php
M   dev/tests/integration/testsuite/Magento/Widget/Model/WidgetTest.php
M   dev/tests/integration/testsuite/Magento/Widget/Setup/LayoutUpdateConverterTest.php
M   dev/tests/integration/testsuite/Magento/Widget/_files/design/adminhtml/magento_basic/composer.json
M   dev/tests/integration/testsuite/Magento/Wishlist/Controller/IndexTest.php
M   dev/tests/integration/testsuite/Magento/Wishlist/Model/WishlistTest.php
M   dev/tests/integration/testsuite/Magento/Wishlist/_files/wishlist.php
M   dev/tests/js/jasmine/assets/gallery/config.json
M   dev/tests/js/jasmine/tests/app/code/Magento/Braintree/frontend/js/paypal/button.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Braintree/frontend/js/view/payment/method-renderer/cc-form.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Braintree/frontend/js/view/payment/method-renderer/paypal.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/adminhtml/js/components/dynamic-rows-import-custom-options.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/base/js/product/list/columns/final-price.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/base/js/product/list/columns/image.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/frontend/js/product/breadcrumbs.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/frontend/js/product/storage/data-storage.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/frontend/js/product/storage/ids-storage-compare.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/frontend/js/product/storage/ids-storage.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/frontend/js/product/storage/storage-service.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Catalog/frontend/js/storage-manager.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/action/redirect-on-success.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/model/cart/cache.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/model/cart/estimate-service.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/model/cart/totals-processor/default.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/model/new-customer-address.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/sidebar.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/view/cart/shipping-estimation.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/view/minicart.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/view/shipping.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Checkout/frontend/js/view/summary/cart-items.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/CheckoutAgreements/frontend/js/model/agreement-validator.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/CheckoutAgreements/frontend/js/model/place-order-mixin.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/CheckoutAgreements/frontend/js/model/set-payment-information-mixin.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Customer/frontend/js/invalidation-processor.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Customer/frontend/js/view/authentication-popup.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/GoogleTagManager/frontend/js/google-tag-manager-cart.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/InstantPurchase/frontend/web/js/view/instant-purchase.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Paypal/frontend/js/in-context/express-checkout.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Paypal/frontend/js/view/payment/method-renderer/in-context/checkout-express.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Paypal/frontend/js/view/payment/method-renderer/paypal-express-abstract.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Review/view/frontend/web/js/process-review.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Tax/view/frontend/web/js/view/checkout/summary/grand-total.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Theme/view/frontend/web/js/view/add-home-breadcrumb.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/dynamic-rows/dynamic-rows.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/form/client.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/form/components/collection.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/form/element/file-uploader.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/form/element/multiselect.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/form/ui-select.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/grid/columns/multiselect.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/grid/columns/select.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/lib/ko/bind/i18n.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/lib/validation/rules.test.js
M   dev/tests/js/jasmine/tests/app/code/Magento/Ui/base/js/timeline/timeline.test.js
M   dev/tests/js/jasmine/tests/lib/mage/backend/bootstrap.test.js
M   dev/tests/js/jasmine/tests/lib/mage/backend/suggest.test.js
M   dev/tests/js/jasmine/tests/lib/mage/collapsible.test.js
M   dev/tests/js/jasmine/tests/lib/mage/misc.test.js
M   dev/tests/js/jasmine/tests/lib/mage/validation.test.js
M   dev/tests/static/framework/Magento/CodeMessDetector/resources/rulesets/design.xml
M   dev/tests/static/framework/Magento/Sniffs/Less/AvoidIdSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/BracesFormattingSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/ClassNamingSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/ColonSpacingSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/ColourDefinitionSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/CombinatorIndentationSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/CommentLevelsSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/ImportantPropertySniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/IndentationSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/PropertiesLineBreakSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/PropertiesSortingSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/QuotesSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/SelectorDelimiterSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/SemicolonSpacingSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/TokenizerSymbolsInterface.php
M   dev/tests/static/framework/Magento/Sniffs/Less/TypeSelectorConcatenationSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/TypeSelectorsSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/VariablesSniff.php
M   dev/tests/static/framework/Magento/Sniffs/Less/ZeroUnitsSniff.php
M   dev/tests/static/framework/Magento/TestFramework/CodingStandard/Tool/BlacklistInterface.php
M   dev/tests/static/framework/Magento/TestFramework/CodingStandard/Tool/CodeSniffer.php
M   dev/tests/static/framework/Magento/TestFramework/CodingStandard/Tool/CodeSniffer/LessWrapper.php
M   dev/tests/static/framework/Magento/TestFramework/CodingStandard/Tool/CodeSniffer/Wrapper.php
M   dev/tests/static/framework/Magento/TestFramework/CodingStandard/Tool/CopyPasteDetector.php
M   dev/tests/static/framework/Magento/TestFramework/Dependency/DiRule.php
M   dev/tests/static/framework/Magento/TestFramework/Dependency/PhpRule.php
M   dev/tests/static/framework/Magento/ruleset.xml
M   dev/tests/static/framework/bootstrap.php
M   dev/tests/static/framework/tests/unit/phpunit.xml.dist
M   dev/tests/static/framework/tests/unit/testsuite/Magento/TestFramework/CodingStandard/Tool/CodeSnifferTest.php
M   dev/tests/static/framework/tests/unit/testsuite/Magento/TestFramework/Utility/Foo.php
M   dev/tests/static/get_github_changes.php
M   dev/tests/static/phpunit-all.xml.dist
M   dev/tests/static/phpunit.xml.dist
M   dev/tests/static/testsuite/Magento/Test/Integrity/ClassesTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/ComposerTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/DependencyTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/HhvmCompatibilityTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/Library/DependencyTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/Library/_files/blacklist_ee.txt
M   dev/tests/static/testsuite/Magento/Test/Integrity/Magento/Backend/ControllerAclTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/Magento/Backend/_files/controller_acl_test_whitelist_ce.txt
M   dev/tests/static/testsuite/Magento/Test/Integrity/Magento/Framework/Api/ExtensibleInterfacesTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/Magento/Framework/Api/_files/ExtensibleInterfacesTest/blacklist_ce.txt
M   dev/tests/static/testsuite/Magento/Test/Integrity/Magento/Framework/Search/RequestConfigTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/Magento/Webapi/Model/ConfigTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/Xml/SchemaTest.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/_files/blacklist/exception_hierarchy.txt
M   dev/tests/static/testsuite/Magento/Test/Integrity/_files/blacklist/exception_hierarchy_ee.txt
M   dev/tests/static/testsuite/Magento/Test/Integrity/_files/blacklist/reference.txt
M   dev/tests/static/testsuite/Magento/Test/Integrity/_files/dependency_test/tables_ce.php
M   dev/tests/static/testsuite/Magento/Test/Integrity/_files/dependency_test/tables_ee.php
M   dev/tests/static/testsuite/Magento/Test/Js/_files/blacklist/magento.txt
M   dev/tests/static/testsuite/Magento/Test/Legacy/InstallUpgradeTest.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/ModuleDBChangeTest.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/ObsoleteCodeTest.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/RestrictedCodeTest.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/UnsecureFunctionsUsageTest.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/blacklist/obsolete_mage.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/connection/whitelist/refactored_modules.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/connection/whitelist/refactored_modules_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/copyright/blacklist.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/copyright/blacklist_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_classes.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_classes_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_config_nodes.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_config_nodes_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_constants.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_constants_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_methods.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_methods_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_namespaces.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_namespaces_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_properties.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/obsolete_properties_ee.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/restricted_classes.php
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/words_ce.xml
M   dev/tests/static/testsuite/Magento/Test/Legacy/_files/words_ee.xml
M   dev/tests/static/testsuite/Magento/Test/Less/_files/blacklist/old.txt
M   dev/tests/static/testsuite/Magento/Test/Less/_files/whitelist/common.txt
M   dev/tests/static/testsuite/Magento/Test/Php/LiveCodeTest.php
M   dev/tests/static/testsuite/Magento/Test/Php/_files/phpcpd/blacklist/common.txt
M   dev/tests/static/testsuite/Magento/Test/Php/_files/phpcpd/blacklist/ee.txt
M   dev/tests/static/testsuite/Magento/Test/Php/_files/phpmd/ruleset.xml
M   dev/tests/static/testsuite/Magento/Test/Php/_files/whitelist/exempt_modules/ce.php
M   dev/tests/static/testsuite/Magento/Test/Php/_files/whitelist/exempt_modules/ee.php
M   dev/tests/unit/framework/bootstrap.php
M   dev/tests/unit/phpunit.xml.dist
M   dev/tools/grunt/configs/autoprefixer.json
M   dev/tools/grunt/configs/watch.js
M   dev/travis/before_install.sh
M   dev/travis/before_script.sh
M   lib/internal/LinLibertineFont/ChangeLog.txt
M   lib/web/css/docs/actions-toolbar.html
M   lib/web/css/docs/breadcrumbs.html
M   lib/web/css/docs/buttons.html
M   lib/web/css/docs/components.html
M   lib/web/css/docs/docs.css
M   lib/web/css/docs/docs.html
M   lib/web/css/docs/dropdowns.html
M   lib/web/css/docs/forms.html
M   lib/web/css/docs/icons.html
M   lib/web/css/docs/index.html
M   lib/web/css/docs/layout.html
M   lib/web/css/docs/lib.html
M   lib/web/css/docs/loaders.html
M   lib/web/css/docs/messages.html
M   lib/web/css/docs/pages.html
M   lib/web/css/docs/popups.html
M   lib/web/css/docs/rating.html
M   lib/web/css/docs/resets.html
M   lib/web/css/docs/responsive.html
M   lib/web/css/docs/sections.html
M   lib/web/css/docs/source/_utilities.less
M   lib/web/css/docs/source/_variables.less
M   lib/web/css/docs/tables.html
M   lib/web/css/docs/tooltips.html
M   lib/web/css/docs/typography.html
M   lib/web/css/docs/utilities.html
M   lib/web/css/docs/variables.html
M   lib/web/css/source/components/_modals.less
M   lib/web/css/source/lib/_dropdowns.less
M   lib/web/css/source/lib/_forms.less
M   lib/web/css/source/lib/_icons.less
M   lib/web/css/source/lib/_navigation.less
M   lib/web/css/source/lib/_resets.less
M   lib/web/css/source/lib/_sections.less
M   lib/web/css/source/lib/_typography.less
M   lib/web/css/source/lib/variables/_buttons.less
M   lib/web/css/source/lib/variables/_colors.less
M   lib/web/css/source/lib/variables/_navigation.less
M   lib/web/css/source/lib/variables/_rating.less
M   lib/web/css/source/lib/variables/_sections.less
M   lib/web/css/source/lib/variables/_typography.less
M   lib/web/extjs/resources/css/ytheme-magento.css
M   lib/web/fotorama/fotorama.js
M   lib/web/i18n/en_US.csv
M   lib/web/images/logo.svg
M   lib/web/images/magento-logo.svg
M   lib/web/jquery.js
M   lib/web/jquery/editableMultiselect/js/jquery.editable.js
M   lib/web/jquery/fileUploader/css/jquery.fileupload-ui.css
M   lib/web/jquery/jquery-migrate.js
M   lib/web/jquery/jstree/jquery.hotkeys.js
M   lib/web/knockoutjs/knockout.js
M   lib/web/legacy-build.min.js
M   lib/web/mage/adminhtml/browser.js
M   lib/web/mage/adminhtml/events.js
M   lib/web/mage/adminhtml/form.js
M   lib/web/mage/adminhtml/globals.js
M   lib/web/mage/adminhtml/grid.js
M   lib/web/mage/adminhtml/tools.js
M   lib/web/mage/adminhtml/wysiwyg/tiny_mce/plugins/magentovariable/editor_plugin.js
M   lib/web/mage/adminhtml/wysiwyg/tiny_mce/plugins/magentowidget/editor_plugin.js
M   lib/web/mage/adminhtml/wysiwyg/tiny_mce/setup.js
M   lib/web/mage/adminhtml/wysiwyg/widget.js
M   lib/web/mage/apply/main.js
M   lib/web/mage/backend/floating-header.js
M   lib/web/mage/backend/validation.js
M   lib/web/mage/calendar.js
M   lib/web/mage/collapsible.js
M   lib/web/mage/common.js
M   lib/web/mage/dataPost.js
M   lib/web/mage/gallery/gallery.js
M   lib/web/mage/gallery/gallery.less
M   lib/web/mage/gallery/module/_extends.less
M   lib/web/mage/ie-class-fixer.js
M   lib/web/mage/menu.js
M   lib/web/mage/requirejs/resolver.js
M   lib/web/mage/storage.js
M   lib/web/mage/tabs.js
M   lib/web/mage/translate-inline.js
M   lib/web/mage/utils/misc.js
M   lib/web/mage/utils/template.js
M   lib/web/mage/validation.js
M   lib/web/magnifier/magnifier.js
M   lib/web/magnifier/magnify.js
M   lib/web/modernizr/modernizr.js
M   lib/web/prototype/validation.js
M   lib/web/prototype/windows/themes/darkX.css
M   lib/web/prototype/windows/themes/lighting.css
M   lib/web/prototype/windows/themes/mac_os_x.css
M   lib/web/prototype/windows/themes/mac_os_x_dialog.css
M   lib/web/prototype/windows/themes/nuncio.css
M   lib/web/underscore.js
M   lib/web/varien/js.js
M   pub/.htaccess
M   pub/errors/.htaccess
M   pub/errors/default/images/logo.gif
M   pub/errors/enterprise/images/logo.gif
M   pub/errors/processor.php
M   pub/health_check.php
M   pub/index.php
M   setup/config/di.config.php
M   setup/config/module.config.php
M   setup/performance-toolkit/README.md
M   setup/performance-toolkit/benchmark.jmx
M   setup/performance-toolkit/benchmark_2015.jmx
M   setup/performance-toolkit/config/description.xml
M   setup/performance-toolkit/profiles/ce/extra_large.xml
M   setup/performance-toolkit/profiles/ce/large.xml
M   setup/performance-toolkit/profiles/ce/medium.xml
M   setup/performance-toolkit/profiles/ce/medium_msite.xml
M   setup/performance-toolkit/profiles/ce/small.xml
M   setup/performance-toolkit/profiles/ee/extra_large.xml
M   setup/performance-toolkit/profiles/ee/large.xml
M   setup/performance-toolkit/profiles/ee/medium.xml
M   setup/performance-toolkit/profiles/ee/medium_msite.xml
M   setup/performance-toolkit/profiles/ee/small.xml
M   setup/pub/angular-ng-storage/angular-ng-storage.min.js
M   setup/pub/angular-sanitize/angular-sanitize.js
M   setup/pub/angular-sanitize/angular-sanitize.min.js
M   setup/pub/angular-sanitize/angular-sanitize.min.js.map
M   setup/pub/angular-ui-bootstrap/angular-ui-bootstrap.min.js
M   setup/pub/angular-ui-router/angular-ui-router.min.js
M   setup/pub/angular/angular.js
M   setup/pub/angular/angular.min.js
M   setup/pub/images/magento-logo.svg
M   setup/pub/magento/setup/add-database.js
M   setup/pub/magento/setup/app.js
M   setup/pub/magento/setup/complete-backup.js
M   setup/pub/magento/setup/create-admin-account.js
M   setup/pub/magento/setup/customize-your-store.js
M   setup/pub/magento/setup/data-option.js
M   setup/pub/magento/setup/extension-grid.js
M   setup/pub/magento/setup/install-extension-grid.js
M   setup/pub/magento/setup/install.js
M   setup/pub/magento/setup/main.js
M   setup/pub/magento/setup/marketplace-credentials.js
M   setup/pub/magento/setup/module-grid.js
M   setup/pub/magento/setup/readiness-check.js
M   setup/pub/magento/setup/select-version.js
M   setup/pub/magento/setup/start-updater.js
M   setup/pub/magento/setup/system-config.js
M   setup/pub/magento/setup/update-extension-grid.js
M   setup/pub/magento/setup/web-configuration.js
M   setup/pub/styles/setup.css
M   setup/src/Magento/Setup/Application.php
M   setup/src/Magento/Setup/Console/Command/AdminUserCreateCommand.php
M   setup/src/Magento/Setup/Console/Command/BackupCommand.php
M   setup/src/Magento/Setup/Console/Command/ConfigSetCommand.php
M   setup/src/Magento/Setup/Console/Command/DbSchemaUpgradeCommand.php
M   setup/src/Magento/Setup/Console/Command/DbStatusCommand.php
M   setup/src/Magento/Setup/Console/Command/DiCompileCommand.php
M   setup/src/Magento/Setup/Console/Command/InfoBackupsListCommand.php
M   setup/src/Magento/Setup/Console/Command/InfoCurrencyListCommand.php
M   setup/src/Magento/Setup/Console/Command/InfoLanguageListCommand.php
M   setup/src/Magento/Setup/Console/Command/InfoTimezoneListCommand.php
M   setup/src/Magento/Setup/Console/Command/InstallCommand.php
M   setup/src/Magento/Setup/Console/Command/ModuleStatusCommand.php
M   setup/src/Magento/Setup/Console/Command/ModuleUninstallCommand.php
M   setup/src/Magento/Setup/Console/Command/RollbackCommand.php
M   setup/src/Magento/Setup/Console/Command/UpgradeCommand.php
M   setup/src/Magento/Setup/Console/CommandList.php
M   setup/src/Magento/Setup/Console/Style/MagentoStyle.php
M   setup/src/Magento/Setup/Controller/LandingInstaller.php
M   setup/src/Magento/Setup/Controller/LandingUpdater.php
M   setup/src/Magento/Setup/Controller/Session.php
M   setup/src/Magento/Setup/Fixtures/BundleProductsFixture.php
M   setup/src/Magento/Setup/Fixtures/ConfigurableProductsFixture.php
M   setup/src/Magento/Setup/Fixtures/ImagesFixture.php
M   setup/src/Magento/Setup/Fixtures/ImagesGenerator/ImagesGenerator.php
M   setup/src/Magento/Setup/Fixtures/OrdersFixture.php
M   setup/src/Magento/Setup/Fixtures/PriceProvider.php
M   setup/src/Magento/Setup/Fixtures/Quote/QuoteGenerator.php
M   setup/src/Magento/Setup/Fixtures/SimpleProductsFixture.php
M   setup/src/Magento/Setup/Model/AdminAccount.php
M   setup/src/Magento/Setup/Model/ConfigOptionsList.php
M   setup/src/Magento/Setup/Model/ConfigOptionsList/Cache.php
M   setup/src/Magento/Setup/Model/ConfigOptionsList/PageCache.php
M   setup/src/Magento/Setup/Model/ConfigOptionsList/Session.php
M   setup/src/Magento/Setup/Model/Cron/MultipleStreamOutput.php
M   setup/src/Magento/Setup/Model/CryptKeyGenerator.php
M   setup/src/Magento/Setup/Model/FixtureGenerator/BundleProductTemplateGenerator.php
M   setup/src/Magento/Setup/Model/FixtureGenerator/ConfigurableProductTemplateGenerator.php
M   setup/src/Magento/Setup/Model/FixtureGenerator/CustomerTemplateGenerator.php
M   setup/src/Magento/Setup/Model/FixtureGenerator/EntityGenerator.php
M   setup/src/Magento/Setup/Model/FixtureGenerator/ProductGenerator.php
M   setup/src/Magento/Setup/Model/FixtureGenerator/SimpleProductTemplateGenerator.php
M   setup/src/Magento/Setup/Model/Installer.php
M   setup/src/Magento/Setup/Model/InstallerFactory.php
M   setup/src/Magento/Setup/Model/ModuleUninstaller.php
M   setup/src/Magento/Setup/Model/PackagesData.php
M   setup/src/Magento/Setup/Model/PhpReadinessCheck.php
M   setup/src/Magento/Setup/Model/SystemPackage.php
M   setup/src/Magento/Setup/Module.php
M   setup/src/Magento/Setup/Module/Di/App/Task/Operation/Area.php
M   setup/src/Magento/Setup/Module/Di/Code/Reader/ClassesScanner.php
M   setup/src/Magento/Setup/Module/Di/Code/Reader/Decorator/Interceptions.php
M   setup/src/Magento/Setup/Module/Di/Code/Reader/FileScanner.php
M   setup/src/Magento/Setup/Module/Di/Code/Scanner/XmlScanner.php
M   setup/src/Magento/Setup/Module/Di/Compiler/Config/Writer/Filesystem.php
M   setup/src/Magento/Setup/Module/Di/Compiler/Config/WriterInterface.php
M   setup/src/Magento/Setup/Module/I18n/Pack/Generator.php
M   setup/src/Magento/Setup/Module/I18n/Parser/Adapter/Html.php
M   setup/src/Magento/Setup/Module/I18n/Parser/Adapter/Js.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/AdminUserCreateCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/ConfigSetCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/DbSchemaUpgradeCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/DbStatusCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/DiCompileCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/InfoBackupsListCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/InfoCurrencyListCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/InfoLanguageListCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/InfoTimezoneListCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/InstallCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/ModuleUninstallCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/RollbackCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Console/Command/UpgradeCommandTest.php
M   setup/src/Magento/Setup/Test/Unit/Controller/SessionTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/AdminAccountTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/BasePackageInfoTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/ConfigOptionsList/CacheTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/ConfigOptionsList/PageCacheTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/ConfigOptionsList/SessionTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/ConfigOptionsListTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/Cron/JobStaticRegenerateTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/DataGeneratorTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/InstallerFactoryTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/InstallerTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/ModuleUninstallerTest.php
M   setup/src/Magento/Setup/Test/Unit/Model/PhpReadinessCheckTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/App/Task/AreaTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/App/Task/OperationFactoryTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/Code/Reader/_files/classes.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/Code/Scanner/PhpScannerTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/Code/Scanner/PluginScannerTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/Code/Scanner/XmlScannerTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/Definition/CollectionTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/Di/_files/app/code/Magento/SomeModule/Helper/Test.php
M   setup/src/Magento/Setup/Test/Unit/Module/I18n/Pack/GeneratorTest.php
M   setup/src/Magento/Setup/Test/Unit/Module/I18n/Parser/ParserTest.php
M   setup/src/Magento/Setup/Validator/DbValidator.php
M   setup/view/layout/layout.phtml
M   setup/view/magento/setup/customize-your-store.phtml
M   setup/view/magento/setup/data-option.phtml
M   setup/view/magento/setup/extension-grid.phtml
M   setup/view/magento/setup/landing.phtml
M   setup/view/magento/setup/marketplace-credentials.phtml
M   setup/view/magento/setup/module-grid.phtml
M   setup/view/magento/setup/navigation/side-menu.phtml
M   setup/view/magento/setup/popupauth.phtml
M   setup/view/magento/setup/readiness-check/progress.phtml
M   setup/view/magento/setup/select-version.phtml
M   setup/view/magento/setup/start-updater.phtml
M   setup/view/magento/setup/web-configuration.phtml
M   setup/view/styles/lib/variables/_colors.less
.git/rebase-apply/patch:131: trailing whitespace.
1.
.git/rebase-apply/patch:132: trailing whitespace.
2.
.git/rebase-apply/patch:139: trailing whitespace.
1.
.git/rebase-apply/patch:140: trailing whitespace.
2.
.git/rebase-apply/patch:141: trailing whitespace.
3.
warning: squelched 625 whitespace errors
warning: 630 lines add whitespace errors.
Falling back to patching base and 3-way merge...
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
Auto-merging composer.json
CONFLICT (content): Merge conflict in composer.json
Auto-merging app/etc/config.php
CONFLICT (content): Merge conflict in app/etc/config.php
error: Failed to merge in the changes.
Patch failed at 0001 magento 2.3.2 upgrade
Use 'git am --show-current-patch' to see the failed patch

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

➜  mag-2-3-2 git:(bd1ce600) ✗ git add composer.json
➜  mag-2-3-2 git:(bd1ce600) ✗ git add  app/etc/config.php
➜  mag-2-3-2 git:(bd1ce600) ✗ git rebase --continue
Applying: magento 2.3.2 upgrade
Applying: Fixed Physical Shop Images
Using index info to reconstruct a base tree...
M   composer.lock
Falling back to patching base and 3-way merge...
Auto-merging composer.lock
CONFLICT (content): Merge conflict in composer.lock
error: Failed to merge in the changes.
Patch failed at 0002 Fixed Physical Shop Images
Use 'git am --show-current-patch' to see the failed patch

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

➜  mag-2-3-2 git:(94270819) ✗ git rebase --continue
Applying: Fixed Physical Shop Images
No changes - did you forget to use 'git add'?
If there is nothing left to stage, chances are that something else
already introduced the same changes; you might want to skip this patch.

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

➜  mag-2-3-2 git:(94270819) git sttaus
git: 'sttaus' is not a git command. See 'git --help'.

The most similar command is
    status
➜  mag-2-3-2 git:(94270819) git rebase --continue
Applying: Fixed Physical Shop Images
No changes - did you forget to use 'git add'?
If there is nothing left to stage, chances are that something else
already introduced the same changes; you might want to skip this patch.

Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".

➜  mag-2-3-2 git:(94270819) git rebase --abort
➜  mag-2-3-2 git:(feature-187) git checkout master
Switched to branch 'master'
Your branch is up to date with 'origin/master'.
➜  mag-2-3-2 git:(master) compsoer update
zsh: command not found: compsoer
➜  mag-2-3-2 git:(master) composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Nothing to install or update
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
➜  mag-2-3-2 git:(master) magento setup:upgrade
Cache cleared successfully
File system cleanup:
/Users/bclemi/Projects/mag-2-3-2/generated/code/Adyen
/Users/bclemi/Projects/mag-2-3-2/generated/code/Dpd
/Users/bclemi/Projects/mag-2-3-2/generated/code/EthanYehuda
/Users/bclemi/Projects/mag-2-3-2/generated/code/Farfetch
/Users/bclemi/Projects/mag-2-3-2/generated/code/MSP
/Users/bclemi/Projects/mag-2-3-2/generated/code/Magento
/Users/bclemi/Projects/mag-2-3-2/generated/code/Mirasvit
/Users/bclemi/Projects/mag-2-3-2/generated/code/PaulSmith
/Users/bclemi/Projects/mag-2-3-2/generated/code/Symfony
The directory '/Users/bclemi/Projects/mag-2-3-2/generated/metadata/' doesn't exist - skipping cleanup
/Users/bclemi/Projects/mag-2-3-2/pub/static/_cache
/Users/bclemi/Projects/mag-2-3-2/pub/static/deployed_version.txt
/Users/bclemi/Projects/mag-2-3-2/pub/static/frontend
/Users/bclemi/Projects/mag-2-3-2/var/view_preprocessed/pub
Updating modules:
Schema creation/updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Upgrading schema..
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Schema post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Running schema recurring...
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Running schema recurring...
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Running schema recurring...
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Running schema recurring...
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Running schema recurring...
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Running schema recurring...
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Running schema recurring...
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Running schema recurring...
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Running schema recurring...
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Running schema recurring...
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Running schema recurring...
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data install/update:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Upgrading data..
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Data post-updates:
Module 'Magento_Store':
Module 'Magento_Directory':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_Eav':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Rule':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Config':
Module 'Magento_Authorization':
Module 'Magento_AdminNotification':
Module 'Magento_Indexer':
Running data recurring...
Module 'Magento_Backup':
Module 'Magento_Variable':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_BundleImportExportStaging':
Module 'Magento_CatalogInventory':
Module 'Magento_CacheInvalidate':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_AdvancedCatalog':
Module 'Magento_Quote':
Module 'Magento_EavGraphQl':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogImportExportStaging':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_Payment':
Module 'Magento_Search':
Module 'Magento_Sales':
Module 'Magento_Msrp':
Module 'Magento_SalesRule':
Module 'Magento_Checkout':
Module 'Magento_Downloadable':
Module 'Magento_GiftCard':
Module 'Magento_StoreGraphQl':
Module 'Magento_Captcha':
Module 'Magento_Widget':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Ui':
Module 'Magento_Wishlist':
Module 'Magento_CheckoutAgreements':
Module 'Magento_Staging':
Module 'Magento_AdvancedCheckout':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsStaging':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_User':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogGraphQl':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_ProductAlert':
Module 'Magento_Contact':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_CurrencySymbol':
Module 'Magento_CustomAttributeManagement':
Module 'Magento_AdvancedRule':
Module 'Magento_CustomerBalance':
Module 'Magento_CustomerCustomAttributes':
Module 'Magento_CustomerFinance':
Module 'Magento_CustomerGraphQl':
Module 'Magento_CustomerImportExport':
Module 'Magento_VersionsCms':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_Reports':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_TargetRule':
Module 'Magento_MediaStorage':
Module 'Magento_BundleGraphQl':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Enterprise':
Module 'Magento_Tax':
Module 'Magento_GiftCardAccount':
Module 'Magento_GiftCardGraphQl':
Module 'Magento_GiftCardImportExport':
Module 'Magento_Bundle':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageStaging':
Module 'Magento_Weee':
Module 'Magento_GiftWrapping':
Module 'Magento_GiftWrappingStaging':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GroupedProduct':
Module 'Magento_GroupedImportExport':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_GroupedProductStaging':
Module 'Magento_DownloadableImportExport':
Module 'Magento_AdminGws':
Module 'Magento_InstantPurchase':
Module 'Magento_Security':
Module 'Magento_WebsiteRestriction':
Module 'Magento_LayeredNavigation':
Module 'Magento_LayeredNavigationStaging':
Module 'Magento_Logging':
Module 'Magento_CatalogEvent':
Module 'Magento_MessageQueue':
Module 'Magento_GiftRegistry':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_MsrpStaging':
Module 'Magento_MultipleWishlist':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_Newsletter':
Module 'Magento_OfflineShipping':
Module 'Magento_GraphQlCache':
Module 'Magento_Banner':
Module 'Magento_PaymentStaging':
Module 'Magento_Vault':
Module 'Magento_Paypal':
Module 'Magento_PaypalCaptcha':
Module 'Magento_Persistent':
Module 'Magento_PersistentHistory':
Module 'Magento_PricePermissions':
Module 'Magento_CatalogStaging':
Module 'Magento_ProductVideo':
Module 'Magento_ProductVideoStaging':
Module 'Magento_PromotionPermissions':
Module 'Magento_AuthorizenetAcceptjs':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_Reminder':
Module 'Magento_DownloadableStaging':
Module 'Magento_RequireJs':
Module 'Magento_ResourceConnections':
Module 'Magento_Review':
Module 'Magento_ReviewStaging':
Module 'Magento_Reward':
Module 'Magento_RewardGraphQl':
Module 'Magento_SalesRuleStaging':
Module 'Magento_Rma':
Module 'Magento_RmaGraphQl':
Module 'Magento_RmaStaging':
Module 'Magento_Robots':
Module 'Magento_Rss':
Module 'Magento_AdvancedSalesRule':
Module 'Magento_CheckoutAddressSearch':
Module 'Magento_SalesArchive':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_CustomerSegment':
Module 'Magento_RewardStaging':
Module 'Magento_CatalogSearch':
Module 'Magento_ScalableCheckout':
Module 'Magento_ScalableInventory':
Module 'Magento_ScalableOms':
Module 'Magento_ScheduledImportExport':
Module 'Magento_CatalogPermissions':
Module 'Magento_SearchStaging':
Module 'Magento_Integration':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_Shipping':
Module 'Magento_Sitemap':
Module 'Magento_CheckoutStaging':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_Support':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_UrlRewrite':
Module 'Magento_GiftCardStaging':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_BannerCustomerSegment':
Module 'Magento_ThemeGraphQl':
Module 'Magento_Tinymce3':
Module 'Magento_Tinymce3Banner':
Module 'Magento_Translation':
Module 'Magento_CheckoutAddressSearchGiftRegistry':
Module 'Magento_CatalogUrlRewriteStaging':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_BundleStaging':
Module 'MSP_ReCaptcha':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_CatalogRuleStaging':
Module 'Magento_VisualMerchandiser':
Module 'Magento_Webapi':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_Invitation':
Module 'Magento_ConfigurableProductStaging':
Module 'Magento_WeeeGraphQl':
Module 'Magento_WeeeStaging':
Module 'Magento_CatalogWidget':
Module 'Magento_CatalogInventoryStaging':
Module 'Magento_WishlistGraphQl':
Module 'Adyen_Payment':
Module 'Amazon_Core':
Module 'Amazon_Login':
Module 'Amazon_Payment':
Module 'Anowave_Package':
Module 'Anowave_Ec':
Module 'ClassyLlama_AvaTax':
Module 'Dotdigitalgroup_Email':
Module 'Dotdigitalgroup_Enterprise':
Module 'Dpd_Shipping':
Module 'EthanYehuda_CronjobManager':
Module 'Farfetch_Integration':
Module 'Locayta_Detail':
Module 'Locayta_Form':
Module 'Magento_PaypalReCaptcha':
Module 'MSP_TwoFactorAuth':
Module 'Mirasvit_Core':
Module 'Mirasvit_Feed':
Module 'Mirasvit_Report':
Module 'PaulSmith_Amp':
Module 'PaulSmith_AmpGeo':
Module 'PaulSmith_BundleProduct':
Module 'PaulSmith_Logger':
Module 'PaulSmith_Website':
Module 'PaulSmith_PhysicalShop':
Module 'PaulSmith_Customer':
Module 'PaulSmith_CustomerEnquiry':
Module 'PaulSmith_Monogram':
Module 'PaulSmith_FindInShop':
Module 'PaulSmith_Catalog':
Module 'PaulSmith_CatalogImport':
Module 'PaulSmith_ShopCheckout':
Module 'PaulSmith_Newsletter':
Module 'PaulSmith_Notification':
Module 'PaulSmith_ShippingMethods':
Module 'PaulSmith_OrderProcessing':
Module 'PaulSmith_OrderReview':
Module 'PaulSmith_OrderSync':
Module 'PaulSmith_ClickReserve':
Module 'PaulSmith_ProductSubscription':
Module 'PaulSmith_ReturnForms':
Module 'PaulSmith_Seo':
Module 'PaulSmith_DhlExport':
Module 'PaulSmith_OrderReturns':
Module 'PaulSmith_SizeGuide':
Module 'PaulSmith_LayeredNavigation':
Module 'Rocco_Editor':
Module 'SVS_GiftCard':
Nothing to import.
➜  mag-2-3-2 git:(master) ✗ magento setup:di:compile
Compilation was started.
Interception cache generation... 7/7 [============] 100% 2 mins 460.0 MiB
Generated code and dependency injection configuration successfully.
➜  mag-2-3-2 git:(master) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - The requested package  could not be found, it looks like its name is invalid, "" is not allowed in package names.

Potential causes:
 - A typo in the package name
 - The package is not available in a stable-enough version according to your minimum-stability setting
   see <https://getcomposer.org/doc/04-schema.md#minimum-stability> for more details.
 - It's a private package and you forgot to add a custom repository to find it

Read <https://getcomposer.org/doc/articles/troubleshooting.md> for further common problems.
➜  mag-2-3-2 git:(master) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - magento/product-enterprise-edition 2.3.2 requires magento/product-community-edition 2.3.2 -> satisfiable by magento/product-community-edition[2.3.2].
    - magento/product-enterprise-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - Installation request for magento/product-enterprise-edition 2.3.2 -> satisfiable by magento/product-enterprise-edition[2.3.2].

➜  mag-2-3-2 git:(master) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - magento/product-enterprise-edition 2.3.2 requires magento/product-community-edition 2.3.2 -> satisfiable by magento/product-community-edition[2.3.2].
    - magento/product-enterprise-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - magento/product-community-edition 2.3.2 requires dotmailer/dotmailer-magento2-extension 3.1.2 -> satisfiable by dotmailer/dotmailer-magento2-extension[3.1.2] but these conflict with your requirements or minimum-stability.
    - Installation request for magento/product-enterprise-edition 2.3.2 -> satisfiable by magento/product-enterprise-edition[2.3.2].

➜  mag-2-3-2 git:(master) ✗ composer update
Gathering patches for root package.
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
Gathering patches for root package.
Gathering patches for dependencies. This might take a minute.
  - Updating dotmailer/dotmailer-magento2-extension (3.1.2 => 3.4.0): Downloading (100%)
Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files
➜  mag-2-3-2 git:(master) ✗