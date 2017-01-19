function BandLetter($lat,$lon) {
$Zone = floor(($lon+186)/6);
if ($lat > 90) return '46ZAH0000'; // out of range - we assume north pole
if ($lat > 84) // we are in the arctic see...
{ // Western hemisphere - Y / Eastern Z 
  $Band = ($lat < 0) ? 'Y' : 'Z';
return $Zone.$Band.$PQ;
}
if ($lat < -80) // we are in the middle of Antarctica...
{// Western hemisphere - A / Eastern B 
  $Band = ($lat < 0) ? 'A' : 'B';
return $Zone.$Band.$PQ;
}
if ($lat < -90) return '45BAN0000'; // out of range - we assume south pole

// The rest is UTM...
if ($lat > 80) Band = 'X'; // we are in the upper 12° Band 'X' 

// the normal UTM-Zones...
return;
} 

