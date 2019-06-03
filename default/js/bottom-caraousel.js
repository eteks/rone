// JavaScript Document
function mycarousel_itemLoadCallback(carousel, state)
{
    // Since we get all URLs in one file, we simply add all items
    // at once and set the size accordingly.
    if (state != 'init')
        return;

    jQuery.get('dynamic_ajax.txt', function(data) {
        mycarousel_itemAddCallback(carousel, carousel.first, carousel.last, data);
    });
};

function mycarousel_itemAddCallback(carousel, first, last, data)
{
    // Simply add all items at once and set the size accordingly.
    var items = data.split('|');

    for (i = 0; i < items.length; i++) {
        carousel.add(i+1, mycarousel_getItemHTML(items[i]));
    }

    carousel.size(items.length);
};

/**
 * Item html creation helper.
 */
function mycarousel_getItemHTML(url)
{
    return '<img src="' + url + '" width="75" height="75" alt="" />';
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        itemLoadCallback: mycarousel_itemLoadCallback
    });
});