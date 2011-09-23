<?php 

/*  Copyright 2011 Magnus Enger Libriotech (email : magnus@enger.priv.no)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

get_header(); 
?>

<div data-role="page" data-theme="b" id="home">

<div data-role="header" data-theme="b">
    <h1><?php bloginfo('name'); ?></h1>
</div>

<div id="content" data-role="content" data-theme="b">

<?php get_sidebar(); ?>

	<?php // include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php get_footer(); ?>
