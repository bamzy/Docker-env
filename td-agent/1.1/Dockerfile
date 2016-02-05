FROM docker-registry:5000/official/ubuntu:trusty

MAINTAINER Fatemeh Zahra <gharaeemanesh@gmail.com>

RUN apt-get clean
RUN apt-get update 
#RUN apt-get install -y --force-yes curl gcc libc6-dev libcurl4-openssl-dev make && \

COPY td-agent_2.2.0-0_amd64.deb /home/

RUN dpkg -i /home/td-agent_2.2.0-0_amd64.deb
#RUN curl -L http://toolbelt.treasuredata.com/sh/install-ubuntu-trusty-td-agent2.sh | sh

#RUN ls -al && \
#  ls -al /etc && \
#  ls -al /etc/td-agent && \
#  ls -al /etc/init.d && \
#  ls -al /etc/init.d/td-agent && \
#  ls -al /usr/sbin && \
#  ls -al /usr/sbin/td-agent 

RUN sed -i 's/ulimit/# ulimit/g' /etc/init.d/td-agent
RUN echo "ulimit -n 8192" >> /etc/default/td-agent

#RUN sed -i -e "s/USER=td-agent/USER=root/" -e "s/GROUP=td-agent/GROUP=root/" td-agent

RUN /usr/sbin/td-agent-gem install fluent-plugin-elasticsearch
RUN /usr/sbin/td-agent-gem install fluent-plugin-docker-format
RUN /usr/sbin/td-agent-gem install fluent-plugin-docker_metadata_filter
RUN /usr/sbin/td-agent-gem install fluent-plugin-record-reformer
RUN /usr/sbin/td-agent-gem install fluent-plugin-json-in-json
RUN /usr/sbin/td-agent-gem install fluent-plugin-docker_metadata_filter
RUN /usr/sbin/td-agent-gem install fluent-plugin-docker-metrics

#COPY td-agent.conf /etc/td-agent/td-agent.conf

EXPOSE 8888
EXPOSE 24224
EXPOSE 24230

#CMD ["/etc/init.d/td-agent restart"]
CMD ["/etc/init.d/td-agent", "restart"]

ENTRYPOINT ["td-agent"]
