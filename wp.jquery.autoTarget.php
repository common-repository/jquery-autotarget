<?php
/**
 * @package wp.jQuery.autoTarget
 * @version 1.0.0
 */
/**
 * Plugin Name: jQuery.autoTarget for WordPress
 * Plugin URI: http://bitpusher.tk/wp-jquery-autotarget
 * Description: Simply, automatically and standards-compliantly make external links open in a new window/tab.
 * Version: 1.0.0
 * Author: Bill Knechtel
 * Author URI: http://bitpusher.tk
 * License:  MIT
 *
 * Copyright (c) 2014-2018 William Knechtel
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

function add_jquery_autotarget()
{
    wp_enqueue_script(
        'jquery-autotarget',
        plugins_url('/js/jQuery.autoTarget.min.js', __FILE__),
        array('jquery')
    );
}

add_action('wp_enqueue_scripts', 'add_jquery_autotarget');
