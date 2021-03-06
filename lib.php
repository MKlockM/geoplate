$MeridianEllipse=40003440; // Erdumfang über die Pole in m
$EinBreitengrad=$MeridianEllipse/180;

function BandLetter($lat,$lon) {
$Zone = floor(($lon+186)/6);
if ($lat > 90) return '46ZAH0000'; // out of range - we assume north pole
if ($lat > 84) // we are in the arctic see... UPS
{ // Western hemisphere - Y / Eastern Z 
  $Band = ($lat < 0) ? 'Y' : 'Z';
  // Latitude 2 distance from pole in m
  $Radius=(90-$lat)*$EinBreitengrad;                  
  // sinus & cosinus of lon
  $PQ= '??' 
  return $Zone.$Band.$PQ;
}
                    
if ($lat < -80) {   // we are in the middle of Antarctica... UPS
  // Western hemisphere - A / Eastern B 
  $Band = ($lat < 0) ? 'A' : 'B';
  $Radius=($lat+90)*$EinBreitengrad;                  
  // sinus & cosinus of lon
  $PQ= '??'                 
  return $Zone.$Band.$PQ;
}
if ($lat < -90) return '45BAN0000'; // out of range - we assume south pole

// The rest is UTM...
if ($lat >= 80) $Band = 'X'; // we are in the upper 12° Band 'X' 

// the normal UTM-Zones...
return $Zone.'99AAA';
} 

