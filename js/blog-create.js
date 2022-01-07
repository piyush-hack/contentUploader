let theEditor;

ClassicEditor.create(document.querySelector("#contentDetails"), {
  ckfinder: {
    uploadUrl:
      "/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json",
  },
  mediaEmbed: {
    previewsInData: true,
  },
})
  .then((editor) => {
    theEditor = editor;
  })
  .catch((error) => {
    console.error(error);
  });

function getDataFromTheEditor() {
  return theEditor.getData();
}

function ondrive() {
  theEditor.data.set(
    theEditor.getData() +
      `&lt;cmiframe src='${
        document.getElementById("uploadlink").value
      }'  width="640" height="480" allow="autoplay" cmiframe&gt;`
  );

  var html = document.getElementById("prevUploads").innerHTML;
  console.log(html);
  if (html.includes(document.getElementById("uploadlink").value) == false) {
    console.log(html , html.search(document.getElementById("uploadlink").value))
    document.getElementById("prevUploads").innerHTML += `<li> ${
      document.getElementById("uploadlink").value
    } </li>`;
  }

  console.log();
}

setTimeout(function () {

  document
    .getElementsByClassName("ck-editor__editable_inline")[0]
    .setAttribute("spellcheck", "false");

  document.getElementsByClassName("ck-file-dialog-button")[0].style.display =
    "none";
  document.getElementsByClassName("ck ck-dropdown")[2].style.display = "none";
  document.getElementsByClassName(
    "theorytag"
  )[0].innerHTML += `&nbsp;&nbsp <span data-container="body" data-toggle="popover" data-placement="top"
     title="<h3>How To Insert Image And Iframe </h3>" data-html="true"
     data-content=" <b>Img</b> : To insert Img Just Copy And Paste Img or use campus_mentor custome tag 'cmimg' as <br> <b><xmt>◀cmimg src='imgsrc_here' cmimg▶</xmt></b> 
     <br><br>
     <b>Iframe</b> : Use custome campus_mentor custome tag <br> <b>◀cmiframe src='src_here' cmiframe▶</b>
     <br><br>
     <b>Inside these tags you can use any property of img and iframe tag of html</b>"
     >
     <i class="fa fa-info-circle" aria-hidden="true"></i></span>`;
  $(function () {
    $('[data-toggle="popover"]').popover();
  });
}, 1000);

function addclass() {
  document.getElementsByClassName(
    "ck-editor__editable_inline"
  )[0].style.minHeight = "500px";
}

setInterval(() => {
  var blog = getDataFromTheEditor();

  blog = changeTagsInblog(blog);

  document.getElementById("my-theory").innerHTML = blog;
  document.getElementById("senddata").value = blog.replace(/'/g , "/*-/");

  var theory = document.getElementById("my-theory");

  var blockquotes = theory.getElementsByTagName("blockquote");
  for (let i = 0; i < blockquotes.length; i++) {
    // console.log(blockquotes[i].innerHTML);
    blockquotes[i].onclick = function () {
      copyblockquote(blockquotes[i].innerText);
    };
  }
}, 5000);

function showsub() {
  document.getElementById("submit").style.display = "block";
}

function copyblockquote(copyText) {
  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText);

  /* Alert the copied text */
  alert("Copied the text: " + copyText);
}

function changeTagsInblog(blog) {
  //cmimg

  blog = blog.replace(/&lt;cmimg/g, "<img");
  blog = blog.replace(/&nbsp;cmimg&gt;/g, ">");
  blog = blog.replace(/cmimg&gt;/g, ">");

  //cmiframe

  blog = blog.replace(/&lt;cmiframe/g, "<iframe");
  blog = blog.replace(/&nbsp;cmiframe&gt;/g, "></iframe>");
  blog = blog.replace(/cmiframe&gt;/g, "></iframe>");

  return blog;
}

window.onbeforeunload = function (e) {
    e = e || window.event;

    // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = 'Sure?';
    }

    // For Safari
    return 'Sure?';
};
