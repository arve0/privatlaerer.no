#!/bin/bash
git push origin master:laptop-master
ssh 10.10.10.87 "cd /opt/privatlaerer && git merge laptop-master"
git pull
