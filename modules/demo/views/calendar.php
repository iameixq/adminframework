<?php
/**
 * @filesource modules/demo/views/calendar.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Demo\Calendar;

use Kotchasan\Html;
use Kotchasan\Http\Request;

/**
 * module=demo-calendar.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Gcms\View
{
    /**
     * ตัวอย่างฟอร์ม
     *
     * @return string
     */
    public function render(Request $request)
    {
        /* คำสั่งสร้างฟอร์ม */
        $form = Html::create('div', array(
            'class' => 'setup_frm',
        ));
        $form->add('div', array(
            'id' => 'calendar',
            'class' => 'margin-left-right-bottom-top',
        ));
        $events = array(
            array(
                'id' => 999,
                'title' => 'Repeating Event',
                'start' => '2018-08-09T16:00:00',
            ),
            array(
                'title' => 'All Day Event',
                'start' => '2018-08-01',
                'color' => '#F00',
            ),
            array(
                'title' => 'Long Event',
                'start' => '2018-08-07',
                'end' => '2018-08-10',
            ),
            array(
                'id' => 999,
                'title' => 'Repeating Event',
                'start' => '2018-08-09T16:00:00',
            ),
            array(
                'id' => 999,
                'title' => 'Repeating Event',
                'start' => '2018-08-16T16:00:00',
                'color' => '#F00',
            ),
            array(
                'title' => 'Conference',
                'start' => '2018-08-11',
                'end' => '2018-08-13',
            ),
            array(
                'title' => 'Meeting',
                'start' => '2018-08-12T10:30:00',
                'end' => '2018-08-12T12:30:00',
                'color' => '#099',
            ),
            array(
                'title' => 'Lunch',
                'start' => '2018-08-12T12:00:00',
                'color' => '#F00',
            ),
            array(
                'title' => 'Meeting',
                'start' => '2018-08-12T14:30:00',
                'color' => '#990',
            ),
            array(
                'title' => 'Happy Hour',
                'start' => '2018-08-12T17:30:00',
            ),
            array(
                'title' => 'Dinner',
                'start' => '2018-07-12T20:00:00',
            ),
            array(
                'title' => 'Birthday Party',
                'start' => '2018-07-13T07:00:00',
            ),
            array(
                'title' => 'Click for Google',
                'url' => 'http://google.com/',
                'start' => '2018-07-28',
            ),
        );
        /* Javascript สำหรับ Calendar */
        $form->script('new Calendar("calendar", {events: '.json_encode($events).', month: 8, year: 2018});');

        return $form->render();
    }
}
