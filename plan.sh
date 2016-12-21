pkg_origin=pftim
pkg_name=wordpress
pkg_version=4.7
pkg_maintainer="timothy.johnson2@purina.nestle.com"
pkg_license=('GPL')
pkg_source="https://wordpress.org/$pkg_name-$pkg_version.tar.gz"
pkg_shasum=7eae27ff70716dae2d2ba58280f2832fd70a208c9cdaf29ab36ac789c14d6977
pkg_deps=(
  pftim/php71
  core/nginx
)

do_build(){
  return 0
}

do_install(){
  rm -fr $HAB_CACHE_SRC_PATH/$pkg_name/wp-config-sample.php
  rm -fr $HAB_CACHE_SRC_PATH/$pkg_name/readme.html
  rm -fr $HAB_CACHE_SRC_PATH/$pkg_name/license.txt

  cp -r $HAB_CACHE_SRC_PATH/$pkg_name/* ${pkg_prefix}
}
