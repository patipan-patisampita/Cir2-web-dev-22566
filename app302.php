<?php
$year = 1945;
switch ($year) {
    case $year >= 2010 && $year <= 2024:
        print "Generation Alpha";
        break;
    case $year >= 1995 && $year <= 2009:
        print "Generation Z";
        break;
    case $year >= 1980 && $year <= 1994:
        print "Generation Y";
        break;
    case $year >= 1965 && $year <= 1979:
        print "Generation X";
        break;
    case $year >= 1946 && $year <= 1964:
        print "Generation Baby Boomers";
        break;
    case $year >= 1925 && $year <= 1945:
        print "Generation Builders";
        break;
    default:
        print "Year ERROR";
        break;
}
