FROM yobasystems/alpine-caddy:armhf

# Because there's no setcap on alpine linux
# it's not possible to modify the port binding
# persmissions of caddy. Run as root to circumvent
# issues when running on port 80 or 443.
USER root
