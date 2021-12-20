<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<style >
select.list-dt {
  border: none;
  outline: 0;
  border-bottom: 1px solid #ccc;
  padding: 2px 5px 3px 5px;
  margin: 2px
}

select.list-dt:focus {
  border-bottom: 2px solid skyblue
}
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  color: lightgrey;
  padding: 0;
}

#progressbar .active {
  color: #000000
}

#progressbar li {
  list-style-type: none;
  font-size: 12px;
  width: 33.3333333333%;
  float: left;
  position: relative
}

#progressbar #account:before {
  font-family: FontAwesome;
  content: "\f024"
}

#progressbar #personal:before {
  font-family: FontAwesome;
  content: "\f03a"
}

#progressbar #confirm:before {
  font-family: FontAwesome;
  content: "\f00c"
}

#progressbar li:before {
  width: 50px;
  height: 50px;
  line-height: 45px;
  display: block;
  font-size: 18px;
  color: #ffffff;
  background: lightgray;
  border-radius: 50%;
  margin: 0 auto 10px auto;
  padding: 2px
}

#progressbar li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: lightgray;
  position: absolute;
  left: 0;
  top: 25px;
  z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
  background: skyblue
}

#msform {
  text-align: center;
  position: relative;
}
.title{
  font-size: 1em !important;
  font-weight: bold !important;
}
fieldset.scheduler-border {
  border-radius: 4px;
  border: 1px solid #ddd !important;
  padding: 0 1.4em 1.4em 1.4em !important;
  margin: 0 0 1.5em 0 !important;
}

legend.scheduler-border {
  font-size: 1em !important;
  font-weight: bold !important;
  text-align: left !important;
  width:auto;
  padding:0 10px;
  border-bottom:none;
}
</style>
