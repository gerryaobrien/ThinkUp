<?php
/**
 *
 * ThinkUp/webapp/_lib/model/class.Option.php
 *
 * Copyright (c) 2009-2016 Mark Wilkie
 *
 * LICENSE:
 *
 * This file is part of ThinkUp (http://thinkup.com).
 *
 * ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
 * later version.
 *
 * ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 *
 * Option
 *
 * A ThinkUp Option Class
 *
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright 2009-2016 Mark Wilkie
 * @author Mark Wilkie <mwilkie[at]gmail[dot]com>
 *
 */
class Option {
    /*
     * @var int id
     */
    var $option_id;

    /*
     * @var int plugin id
     */
    var $namespace;

    /*
     * @var str plugin option name
     */
    var $option_name;

    /*
     * @var str plugin option value
     */
    var $option_value;

    public function __construct($args = null) {
        if (!is_null($args)) {
            if (isset($args['option_id'])) {
                $this->option_id = $args['option_id'];
            }
            if (isset($args['namespace'])) {
                $this->namespace = $args['namespace'];
            }
            if (isset($args['option_name'])) {
                $this->option_name = $args['option_name'];
            }
            if (isset($args['option_value'])) {
                $this->option_value = $args['option_value'];
            }
        }
    }
}