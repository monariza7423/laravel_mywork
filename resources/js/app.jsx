import './bootstrap';


import React, { useState } from 'react';
import ShowMoreButton from './components/ShowMoreButton';

const ParentComponent = () => {
  const [itemCount, setItemCount] = useState(5); // 表示件数の初期値は5とします

  const handleShowMore = () => {
    // さらに5件表示する
    setItemCount(itemCount + 5);
  };

  return (
    <div>
      
      <ShowMoreButton onClick={handleShowMore} />
    </div>
  );
}

export default ParentComponent;