# !/user/bin/python

import re

pattern = re.compile(r'^(\d{4,4})\-\d{2,2}\-\d{2,2},(.+),(.+),(\d+),(\d+),.*$');

f = open("./results.csv", "r", encoding="utf-8");

for line in f:
    match = re.match(pattern, line);
    if match:
        total = int(match.group(4)) + int(match.group(5));

        if total >= 30:
            print(f"goles: {total}, {match.group(1)} {match.group(2)},{match.group(3)} [{match.group(4)}-{match.group(5)}]")

f.close();
