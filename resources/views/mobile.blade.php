@extends('layouts.app')
<style>

.component-1 {
  background-color: var(--sea-green);
  padding: 13px 0 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.ellipse-2 {
  width: 63.55%;
  height: 29.79%;
  margin-bottom: 17px;
  margin-left: 84px;
  border-radius: 50%;
}
.full-name {
  height: 4.27%;
  width: 56.07%;
  color: var(--white);
  display: flex;
  margin-bottom: 8px;
  margin-left: 157px;
  font-family: var(--roboto-18-regular-family);
  font-size: var(--roboto-18-regular-size);
  font-weight: var(--roboto-18-regular-weight);
  line-height: var(--roboto-18-regular-line-height);
}
.email {
  height: 4.82%;
  width: 55.61%;
  display: flex;
  margin-left: 101px;
  color: var(--white);
  font-family: var(--roboto-12-regular-family);
  font-size: var(--roboto-12-regular-size);
  font-weight: var(--roboto-12-regular-weight);
  line-height: var(--roboto-12-regular-line-height);
}
.email-emphasis-1 {
  color: var(--white);
  font-family: var(--roboto-18-regular-family);
  font-size: var(--roboto-18-regular-size);
  font-weight: var(--roboto-18-regular-weight);
  line-height: var(--roboto-18-regular-line-height);
}
.phone-number {
  height: 4.6%;
  width: 50.7%;
  display: flex;
  margin-bottom: 7px;
  margin-left: 78px;
  color: var(--white);
  font-family: var(--roboto-12-regular-family);
  font-size: var(--roboto-12-regular-size);
  font-weight: var(--roboto-12-regular-weight);
  line-height: var(--roboto-12-regular-line-height);
}
.flex-wrapper-one {
  background-color: var(--snow);
  border-radius: 30px 30px 0px 0px;
  padding: 41px 89px 199px 108px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.flex-wrapper-two {
  background-color: var(--sea-green);
  margin-bottom: 72px;
  border-radius: 120px;
  padding: 31px 54px 31px 53px;
  display: flex;
  align-items: center;
}
.edit-profile {
  color: var(--white);
  flex: 1;
  align-self: stretch;
  display: flex;
  font-family: var(--roboto-18-regular-family);
  font-size: var(--roboto-18-regular-size);
  font-weight: var(--roboto-18-regular-weight);
  line-height: var(--roboto-18-regular-line-height);
}
.flex-wrapper-three {
  background-color: var(--sea-green);
  border-radius: 120px;
  padding: 21px 54px 41px 53px;
  display: flex;
  align-items: flex-start;
}
.log-out {
  color: var(--white-2);
  flex: 1;
  align-self: stretch;
  display: flex;
  font-family: var(--roboto-18-regular-family);
  font-size: var(--roboto-18-regular-size);
  font-weight: var(--roboto-18-regular-weight);
  line-height: var(--roboto-18-regular-line-height);
}
</style>


@section('content')    
<div class="component-1">
    <img
      alt=""
      class="ellipse-2"
      src="{{img}}"
    />
    <p class="full-name">{{full-name}}</p>
    <p class="email">
      <strong class="email-emphasis-1">{{email}}</strong>
    </p>
    <p class="phone-number">
      <strong class="email-emphasis-1"
        >{{phone}}<br />
      </strong>
    </p>
    <div class="flex-wrapper-one">
      <div class="flex-wrapper-two">
        <button class="edit-profile">edit profle<br /></button>
      </div>
      <div class="flex-wrapper-three">
        <button class="log-out">LOG OUT<br /></button>
      </div>
    </div>
  </div>
  @endsection