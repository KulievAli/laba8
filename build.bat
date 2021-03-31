#!/bin/bash

git symbolic-ref --short -q HEAD > version

git clone https://github.com/KulievAli/lab9-11.git "core"

cd core
rm -rf .git composer* .gitignore
mv core/* .
rm -rf core