FROM gitpod/workspace-mysql

# Customs cli's and user scripts for /usr/local/bin
COPY --chown=gitpod:gitpod .gp/bash/bin/hot-reload.sh /usr/local/bin
RUN sudo mv /usr/local/bin/hot-reload.sh /usr/local/bin/hot-reload
