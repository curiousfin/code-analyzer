#!/bin/bash

commit_hash="hash"
repo_path="path"

cd $repo_path

for file in $(git diff-tree --no-commit-id --name-only -r $commit_hash)
do
    absolute_path=$(realpath $file)
    echo $absolute_path
done
