export function shouldDialogClose(event) {
    let p = getClickEventPosition(event)
    let clickWithinX = (p.mX > p.tX && p.mX < (p.tX + p.tW))
    let clickWithinY = (p.mY > p.tY && p.mY < (p.tY + p.tH))

    return !(clickWithinX && clickWithinY);
}

function getClickEventPosition(event) {
    const target = event.target.getBoundingClientRect()
    target.x = Math.round(target.x)
    target.y = Math.round(target.y)
    target.width = Math.round(target.width)
    target.height = Math.round(target.height)
    const mouseX = event.clientX
    const mouseY = event.clientY

    return {
        tX: target.x, tY: target.y,
        tW: target.width, tH: target.height,
        mX: mouseX, mY: mouseY,
    }
}
