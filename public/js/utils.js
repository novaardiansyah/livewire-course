$('body').on('click focus change', 'input, textarea, select, radio, checkbox', function () {
  let inputId = $(this).attr('id')
  let inputName = $(this).attr('name')

  if (inputName && !inputName.includes('[]')) {
    let feedbackName = '.invalid-feedback.' + inputName
    $(feedbackName).html('').hide()
  }

  if (inputId && !inputId.includes('[]')) {
    let feedbackClass = '.invalid-feedback.' + inputId
    $(feedbackClass).html('').hide()
  }
})
