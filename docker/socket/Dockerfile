FROM node:10-alpine

RUN apk add bash \
	&& apk add -t .build-deps python make g++ gcc \
	&& npm i --unsafe-perm=true -g laravel-echo-server \
	&& apk del .build-deps

ENTRYPOINT ["laravel-echo-server"]
CMD ["start"]