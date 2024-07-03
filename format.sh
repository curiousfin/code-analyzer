for file in $(./check.sh)
do
    p=$file make fix-cs
done
