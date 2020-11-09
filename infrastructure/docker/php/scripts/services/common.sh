#!/usr/bin/env bash

function update_repositories()
{
    apt-get update
}

function install_git_and_zip()
{
    apt-get install -y git zip unzip
}