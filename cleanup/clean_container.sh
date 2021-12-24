#!/bin/bash
tostop=(db_flag python_flag phpmyadmin_flag level_00 level_01 level_02 level_03 level_04 level_05 level_06 level_07 level_08 level_09 level_10 level_11 level_12 level_13 level_14 level_15 level_16 level_17 level_18 level_19 level_20 level_21 level_22 level_23 level_24 level_25 db_level_09 phpmyadmin_level_09 db_level_23 db_level_24 phpmyadmin_level_23 phpmyadmin_level_24)
for i in "${tostop[@]}"
do
    docker stop "$i"
    docker rm -f "$i"
done
docker volume prune -f
docker kill $(docker ps -a -q)
docker rm -f $(docker ps -a -q)
export COMPOSE_PARALLEL_LIMIT=1000
docker network prune
