
 # need this unless you want different defaults for root.
 PS1='${debian_chroot:+($debian_chroot)}ansible-demot:\w\$ '
 # umask 022

 # You may uncomment the following lines if you want `ls' to be colorized:
 # export LS_OPTIONS='--color=auto'
 # eval "`dircolors`"
 # alias ls='ls $LS_OPTIONS'
 # alias ll='ls $LS_OPTIONS -l'
 # alias l='ls $LS_OPTIONS -lA'
 #
 # Some more alias to avoid making mistakes:
 # alias rm='rm -i'
 # alias cp='cp -i'
 # alias mv='mv -i'

 alias api='apt-get install'
 alias apiu='apt-get update && apt-get upgrade'
 alias apc='apt-cache search'
 HISTFILESIZE=40000
 HISTSIZE=10000


 #adikx
 PS1='\[\e[1;31m\][\u@ansible-fbpewex \W]\$\[\e[0m\] '
 alias apis='apt-cache search'
 alias dstata='dstat -cdngylm'
 alias nsort='sort |uniq -c |sort -n'
 export LANG=pl_PL.UTF-8
 export LC_ALL=pl_PL.UTF-8
 export EDITOR=vim
 cd /vagrant
