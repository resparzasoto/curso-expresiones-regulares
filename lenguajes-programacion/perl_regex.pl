#!/user/bin/perl

use strict;
use warnings;

my $time = time;

open(my $f, "./results.csv") or die("no existe el archivo");

my $match = 0;
my $nomatch = 0;

while(<$f>) {
    # print $_;
    # 2018-06-04,India,Kenya,3,0,Friendly,Mumbai,India,FALSE
    # m/^\d{4,4}\-02\-.*$/) busqueda de los juegos en febrero
    # $0 tiene la linea completa antes de hacer match
    chomp;

    if(m/^(\d{4,4})\-.*?,(.*?),(.*?),(\d+),(\d+),.*$/) {
        if($5 > $4) {
            printf("%d %s (%d) - (%d) %s\n",
                $1, $2, $4, $5, $3
            );
        }
        $match++;
    } else {
        $nomatch++;
    }
}

close($f);


printf("Se encontrarón \n - %d matches \n %d no-matches\ntardó %d segundos", $match, $nomatch, time() - $time);
