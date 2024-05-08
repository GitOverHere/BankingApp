import React, { useState, useEffect } from 'react';

export default function Back() {
  const [accountLoaded, setAccountLoaded] = useState(false);

  useEffect(() => {
    // Simulate loading the account
    // Replace this with actual code that loads the account
    setTimeout(() => {
      setAccountLoaded(true);
    }, 1000); // Assuming 1000 milliseconds (1 seconds) to load the account
  }, []);

  if (!accountLoaded) {
    return <div>Loading...</div>;
  }

  return (
    <a className="href" onClick={() => window.history.back()}>
      Back
    </a>
  );
}
