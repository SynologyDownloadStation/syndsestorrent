<?php

/*
    This file is part of SynDsEsTorrent.

    SynDsEsTorrent is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    SynDsEsTorrent is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with SynDsEsTorrent.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace utils;

abstract class BaseDlmTest extends \PHPUnit_Framework_TestCase
{
    abstract protected function testParse();
    protected $search;

    protected function setObject($object)
    {
        $this->search = $object;
    }

    protected function parse()
    {
        $plugin = new Plugin();
        $curl = curl_init();
        $this->search->prepare($curl, 'a');
        $data = curl_exec($curl);
        $this->assertGreaterThan(0, $this->search->parse($plugin, $data), "No hay resultados");
    }
}
