#!/usr/bin/env bash

red='\033[0;31m'
green='\033[0;32m'
yellow='\033[1;33m'
NC='\033[0m'

# Docker Host IP
DOCKER_HOST_IP='192.168.42.42'

# Write DOCKER_HOST variable export to a matching .rc file based on the shell (bash or zsh)
SOURCE_FILE=''
DOCKER_HOST_EXPORT="\n# Docker (default for Vagrant based boxes)\nexport DOCKER_HOST=tcp://${DOCKER_HOST_IP}:2375\n"

# Detect shell to write to the right .rc file
if [[ $SHELL == '/bin/bash' || $SHELL == '/bin/sh' ]]; then SOURCE_FILE=".bash_profile"; fi
if [[ $SHELL == '/bin/zsh' ]]; then	SOURCE_FILE=".zshrc"; fi

if [[ $SOURCE_FILE ]]; then
	# See if we already did this and skip if so
	grep -q "export DOCKER_HOST=tcp://${DOCKER_HOST_IP}:2375" $HOME/$SOURCE_FILE
	if [[ $? -ne 0 ]]; then
		echo -e "${green}Adding automatic DOCKER_HOST export to $HOME/$SOURCE_FILE${NC}"
		echo -e $DOCKER_HOST_EXPORT >> $HOME/$SOURCE_FILE
	else
	    echo -e "${green}Already added DOCKER_HOST export to $HOME/$SOURCE_FILE${NC}"
	fi
else
	echo -e "${red}Cannot detect your shell. Please manually add the following to your respective .rc or .profile file:${NC}"
	echo -e "$DOCKER_HOST_EXPORT"
fi
