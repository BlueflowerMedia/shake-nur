#!/bin/bash
cd "$(dirname "$0")"
sass --watch sass/style.scss:style.css --sourcemap=none
