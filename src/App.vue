<template lang="pug">
  #app
    #bg(:style="{backgroundImage: 'url(./img/year2.jpg)'}")
    transition(name="fade")
      #loading(v-if="state === 'loading'")
        div.text-center.text-white
          svg.icon(viewBox='0 0 256 256')
            g
              path.top-v(d='M128.002,29.944c3.123-4.874,5.874-9.122,8.578-13.398c2.729-4.317,5.51-8.605,8.074-13.02c1.377-2.371,3.066-3.283,5.854-3.207c7.247,0.201,14.504,0.066,21.879,0.066c-2.275,8.261-3.101,9.438-10.605,8.717c-7.184-0.691-11.578,1.426-15.07,7.946c-4.807,8.965-10.724,17.335-16.18,25.952c-0.682,1.076-1.441,2.102-2.604,3.787c-1.293-1.923-2.191-3.186-3.014-4.496c-6.448-10.246-12.818-20.541-19.403-30.699c-0.755-1.164-2.592-1.91-4.064-2.246c-1.67-0.381-3.496-0.08-5.255-0.078c-8.164,0.008-8.189-0.012-11.056-8.881c4.825,0,9.722-0.386,14.047-0.126c8.128,0.489,12.457,2.104,15.944,9.108C118.608,16.363,123.399,22.707,128.002,29.944z')
              path.left-v(d='M38.935,54.166c-9.561-17.645-19.122-35.289-29-53.52c1.998-0.149,3.136-0.307,4.273-0.307c11.898-0.002,23.799,0.206,35.689-0.065c4.124-0.094,6.933,0.659,7.937,5.017c0.235,1.019,0.835,1.957,1.546,3.561c-11.182,0-21.995,0-33.63,0c0.674,1.798,0.932,2.894,1.462,3.835c3.433,6.083,7.096,12.044,10.311,18.239c1.289,2.483,2.097,5.424,2.305,8.216c0.367,4.917,0.102,9.884,0.102,14.829C39.6,54.036,39.267,54.101,38.935,54.166z')
              path.right-v(d='M214.441,52.997c0-4.72-0.092-9.442,0.062-14.159c0.038-1.246,0.667-2.561,1.302-3.688c4.649-8.269,9.371-16.499,14.626-25.714c-11.821,0-22.96,0-35.021,0c1.723-3.384,2.801-5.758,4.148-7.969c0.375-0.615,1.548-1.048,2.356-1.05c14.302-0.062,28.606-0.045,44.149-0.045c-10.494,18.135-20.592,35.583-30.688,53.031C215.066,53.268,214.754,53.133,214.441,52.997z')
              path.bottom-inner-v(d='M127.903,205.744c-12.943-22.49-25.399-44.134-38.33-66.6c3.585,0,6.382-0.281,9.069,0.137c1.107,0.172,2.236,1.701,2.918,2.871c8.107,13.895,16.128,27.838,24.194,41.755c0.526,0.903,1.274,1.68,2.312,3.021c3.125-5.123,6.175-9.897,9.002-14.797c5.633-9.761,11.139-19.596,16.711-29.395c2.242-3.943,2.938-4.133,12.341-3.285C153.395,161.524,140.826,183.328,127.903,205.744z')
              path.bottom-outer-v(d='M128.398,256c-14.334-24.737-28.672-49.475-43.001-74.218c-8.342-14.4-16.68-28.808-24.991-43.228c-0.503-0.873-0.768-1.887-1.386-3.446c3.192,0,5.866-0.219,8.472,0.107c1.036,0.126,2.245,1.268,2.826,2.266c9.235,15.863,18.388,31.771,27.545,47.675c10.101,17.549,20.187,35.107,30.81,53.588c2.054-3.365,3.797-6.076,5.394-8.869c15.724-27.487,31.425-54.988,47.137-82.48c0.998-1.746,2.302-3.369,3.015-5.221c2.498-6.468,6.99-8.696,13.945-6.559c-0.201,0.623-0.322,1.494-0.732,2.202c-16.283,28.253-32.592,56.489-48.898,84.728c-6.441,11.152-12.883,22.301-19.323,33.451C128.94,256,128.668,256,128.398,256z')
              path.bird(d='M71.55,106.155c7.372-2.425,13.782-4.535,20.195-6.645c-0.078-0.343-0.156-0.685-0.232-1.029c-2.642,0.442-5.297,0.826-7.925,1.336c-7.084,1.375-13.836,1.183-19.01-4.716c-1.587-1.808-2.499-4.205-4.278-7.304c10.103,0,18.994,0,27.886,0c0.015-0.357,0.029-0.714,0.044-1.071c-6.276-0.925-12.536-1.962-18.83-2.746c-6.768-0.844-12.919-7.357-13.119-15.016c10.035,2.618,19.859,5.179,29.681,7.742c0.122-0.251,0.242-0.503,0.363-0.755c-1.381-0.793-2.694-1.757-4.156-2.353c-5.208-2.115-10.473-4.093-15.709-6.145c-7.375-2.889-11.348-10.261-10.108-19.726c9.877,5.445,19.51,10.754,29.142,16.064c0.2-0.27,0.398-0.537,0.596-0.807c-2.05-1.622-4.041-3.327-6.164-4.846c-3.926-2.81-7.974-5.45-11.893-8.268c-7.401-5.318-9.952-12.797-7.266-22.446c8.731,7.701,17.202,15.168,25.672,22.639c0.272-0.257,0.547-0.511,0.819-0.768c-3.593-4-6.886-8.331-10.841-11.932c-8.284-7.543-10.929-25.03-4.543-34.97c3.332,5.128,6.52,9.972,9.644,14.854c10.043,15.697,20.109,31.38,30.001,47.174c0.802,1.279,0.789,3.458,0.388,5.023c-0.993,3.877-2.697,7.574-3.625,11.461c-1.302,5.442,2.743,11.103,8.345,11.767c0.958,0.114,2.717-1.194,3.062-2.204c1.254-3.656,2.231-7.433,2.99-11.228c0.592-2.957,1.736-4.591,5.075-4.22c2.404,0.27,4.864,0.115,7.295,0.043c3.229-0.094,4.349,1.453,3.773,4.7c-1.347,0.153-2.656,0.3-4.445,0.503c-0.725,4.186,0.747,8.008,2.516,11.69c0.286,0.596,1.966,1,2.804,0.769c4.061-1.122,7.503-3.415,7.556-8.558c0.055-4.952-0.616-9.654-3.02-13.997c-1.233-2.225-1.125-4.014,0.312-6.251C157.158,44.29,169.629,24.567,182.17,4.89c0.491-0.771,1.262-1.362,2.305-2.458c3.934,7.718,4.422,15.477,1.781,23.076c-1.527,4.392-4.43,8.438-7.301,12.194c-3.252,4.255-7.154,8.013-10.775,11.984c0.236,0.26,0.474,0.521,0.709,0.781c8.619-7.594,17.236-15.187,26.024-22.931c3.011,9.11,0.601,16.829-6.647,22.055c-4.911,3.543-9.947,6.914-14.881,10.428c-1.255,0.894-2.332,2.039-2.994,3.811c9.621-5.353,19.243-10.707,28.844-16.049c3.281,5.401-2.738,16.936-8.57,19.115c-5.518,2.064-10.961,4.329-16.423,6.542c-1.464,0.592-2.871,1.324-4.301,1.995c0.096,0.358,0.19,0.717,0.287,1.076c9.702-2.527,19.404-5.052,29.136-7.585c1.196,6.732-6.441,14.339-12.385,15.056c-6.617,0.799-13.199,1.889-19.765,3.787c9.097,0,18.193,0,28.087,0c-6.623,16.89-19.518,12.545-31.593,11.502c6.63,2.222,13.26,4.445,19.98,6.696c-4.851,7.932-11.149,8.31-25.701,2.285c4.153,3.417,8.305,6.834,13.059,10.746c-7.703,4.617-13.444,1.842-18.735-3.819c-0.201,0.325-0.403,0.649-0.603,0.975c2.421,3.479,4.847,6.957,7.312,10.496c-6.828,3.225-8.77,1.908-16.906-10.337c0.355,2.03,0.402,4.178,1.121,6.07c2.121,5.583,1.975,10.478-3.996,14.4c-1.099-1.508-2.344-3.214-3.59-4.922c-0.311,0.085-0.623,0.169-0.934,0.254c0.711,2.795,1.169,5.689,2.207,8.355c1.117,2.855,0.818,4.977-1.457,7.116c-2.545,2.397-4.803,5.101-7.586,8.099c-3.186-3.738-7.662-6.871-8.811-10.945c-1.094-3.881,1.287-8.738,1.72-13.541c-1.318,1.897-2.634,3.793-3.934,5.668c-9.421-5.739-3.588-13.573-2.993-21.902c-3.918,7.495-6.315,15.549-17.348,12.041c3.1-4.359,5.896-8.289,8.691-12.221c-5.742,5.052-11.472,9.414-20.262,4.299c4.467-3.744,8.591-7.201,12.716-10.657C88.879,112.764,80.287,115.726,71.55,106.155z')
          br
          h3 資料載入中...
    transition(name="fade")
      #content(v-if="state === ''")
        b-navbar(toggleable='sm' type='dark' variant='faded')
          b-container
            b-navbar-brand(href='#') BFVTW 社群外掛回報系統
            b-navbar-toggle(target='nav-collapse')
            b-collapse#nav-collapse(is-nav)
              b-navbar-nav.ml-auto
                b-nav-item(v-b-modal.report)
                  font-awesome-icon(:icon="['fas', 'exclamation-triangle']")
                  |  回報玩家
                b-nav-item(@click="downloadExcel")
                  font-awesome-icon(:icon="['fas', 'download']")
                  | 下載資料
                  vue-excel-xlsx#excelDL.d-none(
                    :data="excel.data"
                    :columns="excel.columns"
                    :filename="excel.name"
                    :sheetname="excel.sheet"
                  )
        b-container.text-white
          b-row#title
            b-col.my-5.text-center(cols="12")
              h4 總資料最後更新時間: {{ last_update }}
              p.d-inline-block.px-3.text-white.bg-enemy
                | 紅底標記代表玩家的擊殺數已經一週沒有變動，視為已封鎖
          b-row#datatable
            b-col.my-1.mr-auto(md='4')
              b-form-group.mb-0(label='搜尋資料' label-cols='4' label-cols-lg='3' label-size='sm' label-for='filterInput')
                b-input-group(size='sm')
                  b-form-input#filterInput(v-model='table.filter' type='search' placeholder='')
            b-col.my-1.ml-auto(md='4')
              b-form-group.mb-0(label='每頁筆數' label-cols='4' label-cols-lg='3' label-size='sm' label-for='perPageSelect')
                b-form-select#perPageSelect(v-model='table.perPage' size='sm' :options='table.pageOptions')
            b-col.my-1(md="12")
              b-table(:items="hackers"
                :fields="table.fields"
                :filter="table.filter"
                :per-page="table.perPage"
                :current-page="table.currentPage"
                show-empty
              )
                template(v-slot:empty='scope')
                  p.text-center 表格裡沒有資料
                template(v-slot:emptyfiltered='scope')
                  p.text-center 沒有符合搜尋的結果
                template(v-slot:cell(tracker)='data')
                  a.text-white(:href="data.item.tracker" target="_blank")
                    font-awesome-icon(:icon="['fas', 'external-link-alt']")
                template(v-slot:cell(video)='data')
                  a.text-white(:href="data.item.video" target="_blank" v-if="data.item.video.length > 0")
                    font-awesome-icon(:icon="['fab', 'youtube']")
                  span.d-md-none(v-if="data.item.video.length === 0") -
                template(v-slot:cell(banned)='data')
                  font-awesome-icon.text-white(:icon="['fas', 'ban']" v-if="data.item.banned === 'v'")
            b-col.info.my-1(md="6")
              | 顯示第 {{ tableFrom }}
              | 至 {{ tableTo }} 項結果，
              | 共 {{ hackers.length }} 項
            b-col.my-1(md="6")
              b-pagination(v-model='table.currentPage' :total-rows='hackers.length' :per-page='table.perPage' aria-controls='my-table')
            b-col.mt-5.mb-3.text-center(md="12")
              | 本平台內容僅供參考
              br
              | 資料皆由熱心玩家提供，不保證百分之百外掛
              br
              | 玩家 ID 可以隨時修改，不保證資料準確性
              br
              | &copy; {{ new Date().getFullYear() }} Made with ❤ by Kento
              br
            b-col.mb-5.d-flex.justify-content-center(cols="12")
              gh-btns-watch(slug='rogeraabbccdd/BFVTW-Hackers' show-count)
              gh-btns-star(slug='rogeraabbccdd/BFVTW-Hackers' show-count)
              gh-btns-fork(slug='rogeraabbccdd/BFVTW-Hackers' show-count)
        b-modal#report(
          title="回報玩家"
          @show="resetModal"
          @hidden="resetModal"
          @ok="handleOk"
          :okTitle="form.okTitle"
          okVariant="success"
          cancelTitle="取消"
          cancelVariant="danger"
          :ok-disabled="form.okDisabled"
        )
          ValidationObserver#loginForm(
            ref="form"
            tag="form"
            @submit.stop.prevent="handleSubmit"
          )
            ValidationProvider(
              rules="required|name"
              ref="pvdInputName"
              :bails="false"
              v-slot="{ errors }"
              vid="name"
            )
              b-form-group(
                label="玩家 ID"
                label-for="inputName"
                :invalid-feedback="errors[0]"
              )
                b-form-input#inputName(
                  ref="inputName"
                  type="text"
                  v-model.trim="form.name"
                  :state="validState('pvdInputName')"
                )
            ValidationProvider(
              rules="required|video"
              ref="pvdInputVideo"
              v-slot="{ errors }"
            )
              b-form-group(
                label="YouTube 影片網址"
                label-for="inputVideo"
                :invalid-feedback="errors[0]"
              )
                b-form-input#inputVideo(
                  ref="inputVideo"
                  type="text"
                  v-model.trim="form.video"
                  :state="validState('pvdInputVideo')"
                )
          vue-recaptcha(
            :sitekey="cfg.recaptcha"
            @verify="onCaptchaVerify"
            @expired="onCaptchaExpired"
            ref="recaptcha"
          )
          small.text-bold.text-danger(v-if="form.captchaAlert === true") 請通過驗證
</template>

<script>
import VueRecaptcha from 'vue-recaptcha'

import cfg from './config.js'

export default {
  name: 'app',
  components: {
    VueRecaptcha
  },
  data () {
    return {
      cfg,
      state: 'loading',
      last_update: '0000-00-00 00:00:00',
      hackers: [],
      excel: {
        data: [],
        columns: [
          {
            label: '玩家 ID',
            field: 'name'
          },
          {
            label: '擊殺數',
            field: 'kills'
          },
          {
            label: '回報時間',
            field: 'report_date'
          },
          {
            label: '最後活動時間',
            field: 'last_update'
          },
          {
            label: '回報影片',
            field: 'video'
          },
          {
            label: 'Tracker',
            field: 'tracker'
          },
          {
            label: '已封鎖',
            field: 'banned'
          }
        ],
        name: '',
        sheet: 'Hackers'
      },
      table: {
        fields: [
          {
            key: 'name',
            label: '玩家名稱',
            sortable: true,
            tdAttr: {
              'data-th': '玩家名稱'
            }
          },
          {
            key: 'kills',
            label: '擊殺數',
            sortable: true,
            tdAttr: {
              'data-th': '擊殺數'
            }
          },
          {
            key: 'report_date',
            label: '回報時間',
            sortable: true,
            tdAttr: {
              'data-th': '回報時間'
            }
          },
          {
            key: 'last_update',
            label: '最後活動時間',
            sortable: true,
            tdAttr: {
              'data-th': '最後活動時間'
            }
          },
          {
            key: 'video',
            label: '回報影片',
            sortable: true,
            tdAttr: {
              'data-th': '回報影片'
            }
          },
          {
            key: 'banned',
            label: '已封鎖',
            sortable: true,
            tdAttr: {
              'data-th': '已封鎖'
            }
          },
          {
            key: 'tracker',
            label: 'Tracker',
            tdAttr: {
              'data-th': 'Tracker'
            }
          }
        ],
        filter: '',
        perPage: 10,
        pageOptions: [10, 25, 50, { value: 0, text: '全部' }],
        currentPage: 1
      },
      form: {
        name: '',
        video: '',
        captcha: '',
        captchaAlert: false,
        disableSubmit: false,
        okTitle: '回報',
        okDisabled: false
      }
    }
  },
  computed: {
    tableFrom () {
      return (this.table.currentPage - 1) * this.table.perPage + 1
    },
    tableTo () {
      const max = this.table.currentPage * this.table.perPage
      return max > this.hackers.length ? this.hackers.length : max
    },
    ytid () {
      return this.getYTIdByLink(this.form.video)
    }
  },
  methods: {
    urlTracker (name) {
      return 'https://battlefieldtracker.com/bfv/profile/origin/' + name + '/overview'
    },
    urlYoutube (id) {
      return 'https://youtu.be/' + id
    },
    onCaptchaVerify (response) {
      this.form.captcha = response
      this.form.captchaAlert = false
    },
    onCaptchaExpired () {
      this.form.captcha = ''
      this.form.captchaAlert = true
    },
    getYTIdByLink (url) {
      const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/
      const match = url.match(regExp)
      return (match && match[7].length === 11) ? match[7] : false
    },
    downloadExcel () {
      this.$el.querySelector('#excelDL').click()
    },
    handleOk (bvModalEvt) {
      bvModalEvt.preventDefault()
      this.handleSubmit()
    },
    async handleSubmit () {
      this.form.okDisabled = true
      this.form.okTitle = '處理中...'

      // validate
      const isValid = await this.$refs.form.validate()
      if (!isValid) {
        for (let i in this.$refs) {
          if (i.includes('pvdInput')) {
            this.$refs[i].flags.dirty = true
          }
        }
        this.form.okDisabled = false
        this.form.okTitle = '回報'
        return
      }

      // captcha
      if (this.form.captcha.length === 0) {
        this.form.captchaAlert = true
        this.form.okDisabled = false
        this.form.okTitle = '回報'
        return
      }

      // check player is reported or not
      let errorCheckName = ''
      await this.axios.get(cfg.apiUrl + 'isReported.php?name=' + this.form.name)
        .then(res => {
          if (res.data.reported) errorCheckName = '玩家已被回報'
        })
        .catch(() => {
          errorCheckName = '回報資料庫連接失敗'
        })

      if (errorCheckName.length > 0) {
        this.$refs.form.setErrors({
          name: errorCheckName
        })
        this.form.okDisabled = false
        this.form.okTitle = '回報'
        return
      }

      // submit
      let fd = new FormData()
      fd.append('name', this.form.name)
      fd.append('video', this.getYTIdByLink(this.form.video))
      fd.append('recaptcha', this.form.captcha)

      await this.axios.post(cfg.apiUrl + 'submitReport.php', fd)
        .then(res => {
          if (res.data.success) {
            this.$swal({
              icon: 'success',
              text: '感謝您的回報',
              buttonsStyling: false,
              customClass: {
                confirmButton: 'btn btn-success btn-lg'
              }
            }).then(result => {
              if (result.value) {
                this.$nextTick(() => {
                  this.$bvModal.hide('report')
                })
                this.loadData()
              }
            })
          } else {
            this.$swal({
              icon: 'error',
              text: res.data.message,
              buttonsStyling: false,
              customClass: {
                confirmButton: 'btn btn-danger btn-lg'
              }
            })
            this.form.captcha = ''
          }
        })
        .catch(() => {
          this.$swal({
            icon: 'error',
            text: '資料庫連接失敗 :(',
            buttonsStyling: false,
            customClass: {
              confirmButton: 'btn btn-danger btn-lg'
            }
          })
          this.form.captcha = ''
        })

      this.form.okDisabled = false
      this.form.okTitle = '回報'
    },
    resetModal () {
      this.form.name = ''
      this.form.video = ''
      this.form.okTitle = '回報'
      this.form.okDisabled = false
      this.form.captcha = ''
      this.form.captchaAlert = false
    },
    validState (ref) {
      if (this.$refs[ref] !== undefined && this.$refs[ref].classes.dirty) {
        if (this.$refs[ref].classes.valid) return true
        else return false
      } else return null
    },
    async fetchData () {
      await this.axios.get(this.cfg.apiUrl + 'data.php')
        .then(response => {
          this.last_update = response.data.last_update
          this.hackers = response.data.hackers

          const lu = new Date(this.last_update)
          for (const i in this.hackers) {
            const hlu = new Date(this.hackers[i].last_update)
            if (parseInt(lu - hlu) / 1000 / 60 / 60 / 24 >= 7) {
              this.hackers[i]._rowVariant = 'enemy'
            } else this.hackers[i]._rowVariant = ''

            this.hackers[i].video = this.hackers[i].video.length > 0 ? this.urlYoutube(this.hackers[i].video) : ''
            this.hackers[i].last_update = new Date(this.hackers[i].last_update).toLocaleString()
            this.hackers[i].report_date = new Date(this.hackers[i].report_date).toLocaleString()
            this.hackers[i].tracker = this.urlTracker(this.hackers[i].name)
          }

          this.excel.data = this.hackers.map(hacker => {
            hacker.banned = hacker._rowVariant === 'enemy' ? 'v' : ''
            delete hacker['_rowVariant']
            return hacker
          })

          this.excel.name = 'BFVTW Hackers ' + this.last_update
        }).catch(() => {})
    },
    async loadData () {
      this.state = 'loading'
      await this.fetchData()
      await setTimeout(() => {
        this.state = ''
        if (this.hackers.length === 0) {
          this.last_update = '資料庫連接失敗'
          this.$swal({
            icon: 'error',
            text: '資料庫連接失敗 :(',
            buttonsStyling: false,
            customClass: {
              confirmButton: 'btn btn-danger btn-lg'
            }
          })
        }
      }, 2000)
    }
  },
  mounted () {
    this.loadData()
  }
}
</script>
