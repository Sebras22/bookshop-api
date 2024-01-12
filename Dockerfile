FROM golang:alpine as builder

WORKDIR /Bookshop-api/
ADD . /Bookshop-api/

RUN go mod download
RUN go build -o server

FROM scratch
COPY --from=builder /Bookshop-api/server server

CMD [ "/server" ]