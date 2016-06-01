// Initial Progress tracker
var $point_arr, $points, $progress, $trigger, active, max, tracker, val;

$trigger = $('.trigger').first();
$points = $('.progress-points').first();
$point_arr = $('.progress-point');
$progress = $('.progress').first();

val = +$points.data('current');
max = $point_arr.length;
tracker = active = 0;

/**
 * Active page.
 * @param {Object} index
 */
function user_register_bar_activate(index) {
    if(index == max) {
        $point_arr.removeClass('completed active').slice(0, max).addClass('completed');
        return $progress.css('width', "100%");
    }

    if (index != active) {
        // Current active.
        active = index;
        var $_active = $point_arr.eq(active);

        $point_arr.removeClass('completed active').slice(0, active).addClass('completed');

        $_active.addClass('active');

        return $progress.css('width', (index / (max - 1) * 100) + "%");
    }
}

/**
 * Active function.
 */
(function() {

    setTimeout((function() {
        return user_register_bar_activate(val);
    }), 300);

}).call(this);