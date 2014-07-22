#!/bin/bash
git push origin master:laptop-master
ssh seljebu "cd /opt/privatlaerer && git merge laptop-master"
