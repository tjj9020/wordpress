pkg_origin=pftim
pkg_name=wordpress
pkg_version=4.7
pkg_maintainer="timothy.johnson2@purina.nestle.com"
pkg_license=('GPL')
pkg_source="https://wordpress.org/$pkg_name-$pkg_version.tar.gz"
pkg_shasum=7eae27ff70716dae2d2ba58280f2832fd70a208c9cdaf29ab36ac789c14d6977
pkg_deps=(
  pftim/php71
  pftim/nginx
)
pkg_expose="8080"
pkg_svc_user="root"

do_build(){
  return 0
}

do_install(){
  cp -R $HAB_CACHE_SRC_PATH/wordpress/ "${pkg_prefix}/static"
  rm -fr ${pkg_prefix}/static/license.txt ${pkg_prefix}/static/readme.html ${pkg_prefix}/static/wp-config-sample.php
}
