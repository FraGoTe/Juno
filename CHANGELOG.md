Changelog
=========

1.0.x
-----

 * Use `number` filter when showing message count, pages and page number.
 * Remove `blocks.html.twig` and inline the blocks in `base.html.twig`.
 * Use `ng-href=""` on menu icon to make sure it does not reload page.
 * Fix hover color on `.navbar-toggle`.

1.0.1 - 2013-02-05
------------------

 * Use `$rootScope` in DefaultController in order to have dynamic titles.
 * Add `ucfirst` filter to Anguluar.
 * Change template inheritence. Instead of using `@Juno/blocks.html.twig` now extends `@Juno/base.html.twig`.
 * Add `title` block that can be used to override the title used in the header aswell as the title tag.
 * Move documentation from `README.md` into `doc/`.

1.0.0 - 2013-02-04
------------------

 * Initial release.