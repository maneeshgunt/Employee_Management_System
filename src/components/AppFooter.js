import React from 'react'
import { CFooter } from '@coreui/react'

const AppFooter = () => {
  return (
    <CFooter>
      {/* <div>
        <a href="https://scriptika.com/" target="_blank" rel="noopener noreferrer">
          Scriptika Solution
        </a>
        <span className="ms-1">&copy; 2022 </span>
      </div> */}
      <div className="ms-auto">
        <span className="me-1">Developed by</span>
        <a href="https://scriptika.com/" target="_blank" rel="noopener noreferrer">
        Scriptika Solution
        </a>
      </div>
    </CFooter>
  )
}

export default React.memo(AppFooter)
