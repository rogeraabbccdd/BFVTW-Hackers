import { extend } from 'vee-validate'
import { required } from 'vee-validate/dist/rules'

extend('required', {
  ...required,
  message: '這是必填欄位'
})

extend('name', value => {
  const regExp = /^[A-Za-z0-9\-_]{4,16}$/g
  const match = value.match(regExp)
  if (!match) return '格式錯誤'
  else return true
})

extend('video', value => {
  const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/
  const match = value.match(regExp)
  if (match && match[7].length === 11) return true
  else return '影片網址錯誤'
})
